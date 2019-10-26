
<?php
//$login_user= \Illuminate\Support\Facades\Auth::user();

?>


        <!DOCTYPE html>
<html lang="en">

<head>
    <title>Tracker|Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content="flat ui, admin , Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('website/assets/images/five.png')}}" >
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/icon/icofont/css/icofont.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/pages/menu-search/css/component.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/style.css')}}">
    <!--color css-->

    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/linearicons.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/jquery.mCustomScrollbar.css')}}">


    <!-- jquery file upload Frame work -->
    <link href="{{asset('dashboard/assets/pages/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/bower_components/bootstrap-daterangepicker/css/daterangepicker.css')}}"/>
    {{--    sweet alert--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body >
<!-- Pre-loader start -->
{{--<div class="theme-loader">--}}
{{--    <div class="ball-scale">--}}
{{--        <div></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Pre-loader end -->

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a class="mobile-search morphsearch-search" href="#">
                        <i class="ti-search"></i>
                    </a>
                    {{--<a href="{{url('/')}}" target="_blank">--}}
                        {{--<img class="img-fluid" style="height: 50px; width: 60px" src="{{asset($settings->header_logo)}}" alt="Theme-Logo" />--}}

                    {{--</a>--}}
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <div>
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
{{--                            <li>--}}
{{--                                <a class="main-search morphsearch-search" href="#">--}}
{{--                                    <!-- themify icon -->--}}
{{--                                    <i class="ti-search"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
{{--                            <li class="mega-menu-top">--}}
{{--                                <a href="#">--}}
{{--                                    Mega--}}
{{--                                    <i class="ti-angle-down"></i>--}}
{{--                                </a>--}}
{{--                                <ul class="show-notification row">--}}
{{--                                    <li class="col-sm-3">--}}
{{--                                        <h6 class="mega-menu-title">Popular Links</h6>--}}
{{--                                        <ul class="mega-menu-links">--}}
{{--                                            <li><a href="form-elements-component.html">Form Elements</a></li>--}}
{{--                                            <li><a href="button.html">Buttons</a></li>--}}
{{--                                            <li><a href="map-google.html">Maps</a></li>--}}
{{--                                            <li><a href="user-card.html">Contact Cards</a></li>--}}
{{--                                            <li><a href="user-profile.html">User Information</a></li>--}}
{{--                                            <li><a href="auth-lock-screen.html">Lock Screen</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="col-sm-3">--}}
{{--                                        <h6 class="mega-menu-title">Mailbox</h6>--}}
{{--                                        <ul class="mega-mailbox">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="media">--}}
{{--                                                    <div class="media-left">--}}
{{--                                                        <i class="ti-folder"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="media-body">--}}
{{--                                                        <h5>Data Backup</h5>--}}
{{--                                                        <small class="text-muted">Store your data</small>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="media">--}}
{{--                                                    <div class="media-left">--}}
{{--                                                        <i class="ti-headphone-alt"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="media-body">--}}
{{--                                                        <h5>Support</h5>--}}
{{--                                                        <small class="text-muted">24-hour support</small>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="media">--}}
{{--                                                    <div class="media-left">--}}
{{--                                                        <i class="ti-dropbox"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="media-body">--}}
{{--                                                        <h5>Drop-box</h5>--}}
{{--                                                        <small class="text-muted">Store large amount of data in one-box only--}}
{{--                                                        </small>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="media">--}}
{{--                                                    <div class="media-left">--}}
{{--                                                        <i class="ti-location-pin"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="media-body">--}}
{{--                                                        <h5>Location</h5>--}}
{{--                                                        <small class="text-muted">Find Your Location with ease of use</small>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="col-sm-3">--}}
{{--                                        <h6 class="mega-menu-title">Gallery</h6>--}}
{{--                                        <div class="row m-b-20">--}}
{{--                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('dashboard/assets/images/mega-menu/01.jpg')}}" alt="Gallery-1">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('dashboard/assets/images/mega-menu/02.jpg')}}" alt="Gallery-2">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('dashboard/assets/images/mega-menu/03.jpg')}}" alt="Gallery-3">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row m-b-20">--}}
{{--                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('dashboard/assets/images/mega-menu/04.jpg')}}" alt="Gallery-4">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('dashboard/assets/images/mega-menu/05.jpg')}}" alt="Gallery-5">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{asset('dashboard/assets/images/mega-menu/06.jpg')}}" alt="Gallery-6">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>--}}
{{--                                    </li>--}}
{{--                                    <li class="col-sm-3">--}}
{{--                                        <h6 class="mega-menu-title">Contact Us</h6>--}}
{{--                                        <div class="mega-menu-contact">--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="example-text-input" class="col-3 col-form-label">Name</label>--}}
{{--                                                <div class="col-9">--}}
{{--                                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="example-search-input" class="col-3 col-form-label">Email</label>--}}
{{--                                                <div class="col-9">--}}
{{--                                                    <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="example-search-input" class="col-3 col-form-label">Contact</label>--}}
{{--                                                <div class="col-9">--}}
{{--                                                    <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="exampleTextarea" class="col-3 col-form-label">Message</label>--}}
{{--                                                <div class="col-9">--}}
{{--                                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>
                        <ul class="nav-right">
{{--                            <li class="header-notification lng-dropdown">--}}
{{--                                <a href="#" id="dropdown-active-item">--}}
{{--                                    <i class="flag-icon flag-icon-gb m-r-5"></i> English--}}
{{--                                </a>--}}
{{--                                <ul class="show-notification">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" data-lng="en">--}}
{{--                                            <i class="flag-icon flag-icon-gb m-r-5"></i> English--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" data-lng="es">--}}
{{--                                            <i class="flag-icon flag-icon-es m-r-5"></i> Spanish--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" data-lng="pt">--}}
{{--                                            <i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" data-lng="fr">--}}
{{--                                            <i class="flag-icon flag-icon-fr m-r-5"></i> French--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            {{--<li class="header-notification">--}}
                                {{--<a href="#!">--}}
                                    {{--<i class="ti-bell"></i>--}}
                                    {{--<span class="badge">5</span>--}}
                                {{--</a>--}}
                                {{--<ul class="show-notification">--}}
                                    {{--<li>--}}
                                        {{--<h6>Notifications</h6>--}}
                                        {{--<label class="label label-danger">New</label>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="media">--}}
                                            {{--<img class="d-flex align-self-center" src="{{asset('dashboard/assets/images/user.png')}}" alt="Generic placeholder image">--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="notification-user">John Doe</h5>--}}
                                                {{--<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>--}}
                                                {{--<span class="notification-time">30 minutes ago</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="media">--}}
                                            {{--<img class="d-flex align-self-center" src="{{asset('dashboard/assets/images/user.png')}}" alt="Generic placeholder image">--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="notification-user">Joseph William</h5>--}}
                                                {{--<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>--}}
                                                {{--<span class="notification-time">30 minutes ago</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="media">--}}
                                            {{--<img class="d-flex align-self-center" src="{{asset('dashboard/assets/images/user.png')}}" alt="Generic placeholder image">--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="notification-user">Sara Soudein</h5>--}}
                                                {{--<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>--}}
                                                {{--<span class="notification-time">30 minutes ago</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
{{--                            <li class="header-notification">--}}
{{--                                <a href="#!" class="displayChatbox">--}}
{{--                                    <i class="ti-comments"></i>--}}
{{--                                    <span class="badge">9</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li class="user-profile header-notification">
                                <a href="#!">


{{--                                    @if($login_user->image=='')--}}
                                        <img src="{{asset('dashboard/assets/images/user.png')}}" alt="User-Profile-Image">
{{--                                    @else--}}

{{--                                        <img src="{{asset($login_user->image)}}" alt="User-Profile-Image">--}}
{{--                                    @endif--}}
{{--                                    <span>{{$login_user->name}}</span>--}}
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
{{--                                    <li>--}}
{{--                                        <a href="#!">--}}
{{--                                            <i class="ti-settings"></i> Settings--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a href="">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="email-inbox.html">--}}
                                            {{--<i class="ti-email"></i> My Messages--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
{{--                                    <li>--}}
{{--                                        <a href="auth-lock-screen.html">--}}
{{--                                            <i class="ti-lock"></i> Lock Screen--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li>
{{--                                        <a href="{{ route('logout') }}"--}}


{{--                                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                            <i class=" icofont icofont-logout"></i> Logout--}}
{{--                                        </a>--}}
{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}








                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- search -->
                        <div id="morphsearch" class="morphsearch">
                            <form class="morphsearch-form">
                                <input class="morphsearch-input" type="search" placeholder="Search..." />
                                <button class="morphsearch-submit" type="submit">Search</button>
                            </form>
                            <div class="morphsearch-content">
                                <div class="dummy-column">
                                    <h2>People</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                        <h3>Sara Soueidan</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                        <h3>Shaun Dona</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Popular</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="{{asset('dashboard/assets/images/avatar-1.png')}}" alt="PagePreloadingEffect" />
                                        <h3>Page Preloading Effect</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="{{asset('dashboard/assets/images/avatar-1.png')}}" alt="DraggableDualViewSlideshow" />
                                        <h3>Draggable Dual-View Slideshow</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Recent</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="{{asset('dashboard/assets/images/avatar-1.png')}}" alt="TooltipStylesInspiration" />
                                        <h3>Tooltip Styles Inspiration</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="{{asset('dashboard/assets/images/avatar-1.png')}}" alt="NotificationStyles" />
                                        <h3>Notification Styles Inspiration</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- /morphsearch-content -->
                            <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                        </div>
                        <!-- search end -->
                    </div>
                </div>
            </div>
        </nav>
