<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Just trying to learn :D</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        <div class="app-header header sticky">
            <div class="container-fluid main-container">
                <div class="d-flex">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                    <!-- sidebar-toggle-->
                    <a class="logo-horizontal " href="/admin/dashboard">
                        <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                             alt="logo">
                    </a>

                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                        <div class="navbar navbar-collapse responsive-navbar p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex order-lg-2">
                                    <div class="dropdown d-lg-none d-flex">
                                        <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                            <i class="fe fe-search"></i>
                                        </a>
                                        <div class="dropdown-menu header-search dropdown-menu-start">
                                            <div class="input-group w-100 p-2">
                                                <input type="text" class="form-control" placeholder="Search....">
                                                <div class="input-group-text btn btn-primary">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @auth
                                    <div class="d-flex country">
                                        <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                            <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                            <span class="light-layout"><i class="fe fe-sun"></i></span>
                                        </a>
                                    </div>
                                    <div class="dropdown  d-flex notifications">
                                        <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                                class="fe fe-bell"></i><span class=" pulse"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <div class="drop-heading border-bottom">
                                                <div class="d-flex">
                                                    <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="notifications-menu">
                                                @if(session('success'))
                                                    <x-template.notify :status="'success'" :time="'2 days ago'">
                                                        Your post has been created
                                                    </x-template.notify>
                                                @endif
                                                <x-template.notify :status="'email'" :time="'2 days ago'">
                                                    You got new email
                                                </x-template.notify>
                                                <x-template.notify :status="'project-completed'" :time="'3 days ago'">
                                                    Project is completed
                                                </x-template.notify>
                                                <x-template.notify :status="'product-delivered'" :time="'4 days ago'">
                                                    Your product is delivered
                                                </x-template.notify>
                                                <x-template.notify :status="'friend-request'" :time="'5 days ago'">
                                                    You got new friend request
                                                </x-template.notify>
                                            </div>
                                            <div class="dropdown-divider m-0"></div>
                                            <a href="/notify-list"
                                               class="dropdown-item text-center p-3 text-muted">View all
                                                Notification</a>
                                        </div>
                                    </div>

                                    <div class="dropdown d-flex profile-1">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                            <img src="https://i.pravatar.cc/60/{{ auth()->user()->id }}" alt="profile-user"
                                                 class="avatar  profile-user brround cover-image">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <div class="drop-heading">
                                                <div class="text-center">
                                                    <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ auth()->user()->name }}</h5>
                                                    <small class="text-muted">{{ auth()->user()->is_admin ? 'Admin' : 'Normal User'}}</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item" href="/users/{{ auth()->user()->id }}">
                                                <i class="dropdown-icon fe fe-user"></i> Profile
                                            </a>

                                            <form method="post" action="{{ route('logout') }}">
                                                @csrf

                                                    <a class="dropdown-item">
                                                        <i class="dropdown-icon fa fa-sign-out"></i> <button style="background: none; border: none; color: white;" type="submit">Log out</button>
                                                    </a>
                                            </form>
                                        </div>
                                    </div>
                                    @else
                                        <button class="btn btn-primary white-text-btn"><a href="{{ route('login') }}">Login</a></button><button class="btn btn-primary white-text-btn"><a href="{{ route('register') }}">Sign up</a></button>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        <div class="sticky">
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="app-sidebar">
                <div class="side-header">
                    <a class="header-brand1" href="/admin/dashboard">
                        <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                        <img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                        <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                    </a>
                    <!-- LOGO -->
                </div>
                <div class="main-sidemenu">
                    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                    <ul class="side-menu">
                        <li class="sub-category">
                            <h3>Main</h3>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="/admin/dashboard"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="/admin/users"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Users</span></a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="/tweets"><i class="side-menu__icon fa fa-twitter"></i><span class="side-menu__label">Tweets</span></a>
                        </li>

                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                </div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->
        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <h1 class="page-title">{{ Route::currentRouteName() }}</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User List</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->


                    {{ $slot }}

                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!--app-content closed-->
    </div>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>
</div>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- TypeHead js -->
    <script src="../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../assets/js/typehead.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Select2 JS-->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>




</body>

</html>
