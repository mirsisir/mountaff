<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>MountApp </title>

    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">  

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{--  <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>--}}
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
@yield('css_after')

<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
</head>

<body>
<!-- Page Container -->

<div id="page-container"
     class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-image" style="background-image: url('{{ asset('media/various/bg_side_overlay_header.jpg') }}');">
            <div class="bg-primary-op">
                <div class="content-header">
                    <!-- User Avatar -->
                    <a class="img-link me-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ms-2">
                        <a class="text-white fw-semibold" href="javascript:void(0)">George Taylor</a>
                        <div class="text-white-75 fs-sm">Full Stack Developer</div>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout"
                       data-action="side_overlay_close">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <div class="block pull-x mb-0">
                <!-- Color Themes -->
                <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="row g-sm text-center">
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme"
                               data-theme="default" href="#">
                                Default
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xwork.css') }}" href="#">
                                xWork
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xmodern.css') }}" href="#">
                                xModern
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xeco.css') }}" href="#">
                                xEco
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xsmooth.css') }}" href="#">
                                xSmooth
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xinspire.css') }}" href="#">
                                xInspire
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xdream.css') }}" href="#">
                                xDream
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xpro.css') }}" href="#">
                                xPro
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xplay.css') }}" href="#">
                                xPlay
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Color Themes -->

                <!-- Sidebar -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="row g-sm text-center">
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                        </div>
                    </div>
                </div>
                <!-- END Sidebar -->

                <!-- Header -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Header</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="row g-sm text-center mb-2">
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="header_style_light" href="javascript:void(0)">Light</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="header_mode_static" href="javascript:void(0)">Static</a>
                        </div>
                    </div>
                </div>
                <!-- END Header -->

                <!-- Content -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Content</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="row g-sm text-center">
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                        </div>
                        <div class="col-12 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                        </div>
                    </div>
                </div>
                <!-- END Content -->
            </div>
            <div class="block pull-x mb-0">
                <!-- Content -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Heading</span>
                </div>
                <div class="block-content">
                    <p>
                        Content..
                    </p>
                </div>
                <!-- END Content -->
            </div>
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="/">
            <span class="smini-visible">
              D<span class="opacity-75">x</span>
            </span>
                    <span class="smini-hidden">
              Mount<span class="opacity-75">aff</span>
            </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                            data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                            onclick="MountApp.layout('sidebar_style_toggle');MountApp.layout('header_style_toggle');">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </button>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Dark Mode -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                            data-target="#dark-mode-toggler" data-class="far fa"
                            onclick="MountApp.layout('dark_mode_toggle');">
                        <i class="far fa-moon" id="dark-mode-toggler"></i>
                    </button>
                    <!-- END Dark Mode -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                            data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-location-arrow"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Various</li>
                    <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                           aria-expanded="true" href="#">
                            <i class="nav-main-link-icon fa fa-lightbulb"></i>
                            <span class="nav-main-link-name">Pages</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('posts/*') ? ' active' : '' }}"
                                   href="{{ route('posts.post.index') }}">
                                    <span class="nav-main-link-name">Posts</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('categories/*') ? ' active' : '' }}"
                                   href="{{ route('categories.category.index') }}">
                                    <span class="nav-main-link-name">Category</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('categories/*') ? ' active' : '' }}"
                                   href="{{ route('customer_querys.customer_querys.index') }}">
                                    <span class="nav-main-link-name">Customer Querys</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-main-heading">More</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/">
                            <i class="nav-main-link-icon fa fa-globe"></i>
                            <span class="nav-main-link-name">Landing</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="space-x-1">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

               
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="space-x-1">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">Admin</span>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                       
                            <div role="separator" class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-alt-secondary"><i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out</button>
                         </form>
                           
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

              

            
            </div>
            <!-- END Right Section -->
        </div>

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container " style="padding : 40px; padding-top:80px">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                                                                               href="https://www.upwork.com/freelancers/~01232994a74f3b07f8">Enam</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="#" target="_blank">MountApp</a> &copy;
                    <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

@yield('js')
@yield('scripts')

<!-- MountApp Core JS -->
<script src="{{ mix('js/dashmix.app.js') }}"></script>

<!-- Laravel Original JS -->
<!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->

@yield('js_after')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

</body>

</html>
