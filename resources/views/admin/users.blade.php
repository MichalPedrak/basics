<x-main.layout>

                    <!-- ROW OPEN -->
                    <div class="row row-cards">
                        <div class="col-lg-12 col-xl-12">
                            <div class="input-group mb-5">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-text btn btn-primary">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <h2 class="card-title">1 - 30 of 546 users</h2>
                                    <div class="page-options ms-auto">
                                        <select class="form-control select2 w-100">
                                            <option value="asc">Latest</option>
                                            <option value="desc">Oldest</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="e-table px-5 pb-5">
                                    <div class="table-responsive table-lg">
                                        <table class="table border-top table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Photo</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th class="text-center">Is Admin</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                            <tr>
{{--                                                <td class="align-middle text-center">--}}
{{--                                                    <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">--}}
{{--                                                        <input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
                                                <td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="https://i.pravatar.cc/60/{{ $user->id }}"></td>
                                                <td class="text-nowrap align-middle"><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                                                <td class="text-nowrap align-middle"><span>{{ $user->created_at->diffForHumans() }}</span></td>
                                                <td class="text-nowrap align-middle text-center "><span>{{ $user->is_admin }}</span></td>

                                                <td class="text-center align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 mt-5">
                                {{ $users->links() }}
                            </div>

                        </div>
                        <!-- COL-END -->
                    </div>
                    <!-- ROW CLOSED -->

</x-main.layout>
