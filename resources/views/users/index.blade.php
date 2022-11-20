<x-main.layout>
    <!-- todo: Make blade components -->
    <!-- ROW-1 OPEN -->
    <div class="row" id="user-profile">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="wideget-user mb-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="panel profile-cover">
                                        <div class="profile-cover__action bg-img"></div>
                                        <div class="profile-cover__img">
                                            <div class="profile-img-1">
                                                <img src="https://i.pravatar.cc/60/{{ $user->id }}" alt="img">
                                            </div>
                                            <div class="profile-img-content text-dark text-start">
                                                <div class="text-dark">
                                                    <h3 class="h3 mb-2">{{ $user->name }}</h3>
                                                    <h5 class="text-muted">
                                                        @if($user->is_admin)
                                                            Admin
                                                        @else
                                                            Normal User
                                                        @endif
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="px-0 px-sm-4">
                                        <div class="social social-profile-buttons mt-5 float-end">
                                            <div class="mt-3">
                                                <a class="social-icon text-primary" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="social-icon text-primary" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-profile-contact-list">
                                <div class="me-5">
                                    <div class="media mb-4 d-flex">
                                        <div class="media-icon bg-secondary bradius me-3 mt-1">
                                            <i class="fe fe-edit fs-20 text-white"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="text-muted">Tweets</span>
                                            <div class="fw-semibold fs-25">
                                                {{ $tweets->count() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <form class="profile-edit">
                                <textarea class="form-control" placeholder="What's in your mind right now" rows="7"></textarea>
                                <div class="profile-share border-top-0">
                                    <div class="mt-2">
                                        <a href="javascript:void(0)" class="me-2" title="Audio" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-mic"></i></span></a>
                                        <a href="javascript:void(0)" class="me-2" title="Video" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-video"></i></span></a>
                                        <a href="javascript:void(0)" class="me-2" title="Image" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-image"></i></span></a>
                                    </div>
                                    <button class="btn btn-sm btn-success ms-auto"><i class="fa fa-share ms-1"></i> Share</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @foreach($tweets as $tweet)

                    <div class="card border p-0 shadow-none">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="media mt-0">
                                    <div class="media-user me-2">
                                        <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="https://i.pravatar.cc/60/{{ $user->id }}"></div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0 mt-1">{{ $user->name }}</h6>
                                        <small class="text-muted">{{ $tweet->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            {{--  SHOW EDIT OPTIONS ONLY FOR USER AND ADMINS  --}}
                            @auth
                                @if(auth()->id() === $user->id or auth()->user()->is_admin)
                                    <div class="ms-auto">
                                        <div class="dropdown show">
                                            <a class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                <span class=""><i class="fe fe-more-vertical"></i></span>
                                            </a>


                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit Post</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Delete Post</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Personal Settings</a>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @endauth
                            </div>
                            <div class="mt-4">
                                <h4 class="fw-semibold mt-3">{{ $tweet->title }}</h4>
                                <p class="mb-0">{{ $tweet->body }}.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer user-pro-2">
                            <div class="media mt-0">
                                <div class="media-user me-2">
                                    <div class="avatar-list avatar-list-stacked">
                                        <span class="avatar brround" style="background-image: url(../assets/images/users/12.jpg)"></span>
                                        <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                        <span class="avatar brround" style="background-image: url(../assets/images/users/9.jpg)"></span>
                                        <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                        <span class="avatar brround" style="background-image: url(../assets/images/users/4.jpg)"></span>
                                        <span class="avatar brround text-primary">+28</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="mb-0 mt-2 ms-2">Tweet has {{ $tweet->likes }} likes</h6>
                                </div>
                                <div class="ms-auto">
                                    <div class="d-flex mt-1">
                                        <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-heart"></i></span></a>
                                        <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-message-square"></i></span></a>
                                        <a class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-share-2"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
        <!-- COL-END -->
    </div>
    <!-- ROW-1 CLOSED -->

</div>
<!-- CONTAINER CLOSED -->

</div>
</div>
</x-main.layout>
