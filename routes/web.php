<?php

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/users', function () {
    return view('admin.users', [
        'users' => User::paginate(10),
    ]);
})->name('All users')->middleware('auth');

Route::get('/users/{user}', function (User $user) {
    return view('users.index', [
        'user' => $user,
        'tweets' => $user->tweets,
    ]);
})->name('Single User');

Route::get('/tweets', function () {
    return view('features.tweets', [
        'tweets' => Tweet::latest()->get(),
    ]);
})->name('Single User');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('Dashboard')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); // musi być zalogowany i zweryfikowany


Route::post('/tweets/store', function(){

    $attributes = request()->validate([
        'title' => 'required',
        'body' => 'required',

    ]);
    $attributes['user_id'] = auth()->id();
    $attributes['likes'] = 0;

    Tweet::create($attributes);

    return redirect("/tweets")->with('success', 'Stworzono post');


})->name('add_tweet')->middleware('auth');

require __DIR__.'/auth.php'; // file with other routes

