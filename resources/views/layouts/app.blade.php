<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'LMS') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/main.min.css">
    <!-- Style.css -->
    <link rel="icon" href="/default/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/summernote.min.css">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="/default/assets/icon/material-design/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/default/assets/icon/icofont/css/icofont.css">
    <!-- list css -->
    <link rel="stylesheet" type="text/css" href="/default/assets/pages/list-scroll/list.css">
    <link rel="stylesheet" type="text/css" href="/default/assets/icon/ion-icon/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/default/assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/default/assets/icon/material-design/css/material-design-iconic-font.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="/default/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/default/assets/pages/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/default/assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="/default/assets/pages/foo-table/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/default/assets/pages/foo-table/css/footable.standalone.min.css">
    <link rel="stylesheet" type="text/css" href="/default/assets/pages/foo-table/css/jquery.dataTables.min.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="/default/assets/css/color/color-1.css" id="color"/>
    <link rel="stylesheet" type="text/css" href="/default/assets/css/style.css">
    <!-- Bootstrap date-time-picker js -->
    <link rel="stylesheet" type="text/css" href="/default/assets/pages/notification/notification.css">
    <!--sticky Css-->
    <link rel="stylesheet" href="/default/assets/pages/sticky/css/jquery.postitall.css" type="text/css" media="all">
    <link rel="stylesheet" href="/default/assets/pages/sticky/css/trumbowyg.css" type="text/css" media="all">
    <script src="/js/jquery.min.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};

        function getID(val){
            var name =  $("#" + val).html();
            var url=$("#"+val).attr("href");
            $("#add").attr("href", "url")
            $("label").text(name).css({"margin-top":"10px", "font-size": "100%","text-color": "green","margin-right":"1px","margin-left":"1px"});
        }

    </script>
    <style>
        .note-popover {
            display: none;
        }
    </style>
</head>
<body class="horizontal-fixed">
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div></div>
    </div>
</div>
<!-- Pre-loader end -->
<!-- Menu header start -->
<nav class="navbar header-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a href="index.html">
                <img class="img-fluid" src="/default/assets/images/menu.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <div>
                <ul class="nav-left">
                    <li>
                        <a id="collapse-menu" href="#">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="header-notification">
                        <a href="#!">
                            <i class="ti-bell"></i>
                            <span class="badge">5</span>
                        </a>
                        <ul class="show-notification">
                            <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="d-flex align-self-center" src="/default/assets/images/user.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">John Doe</h5>
                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span class="notification-time">30 minutes ago</span>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="user-profile header-notification">
                        <a href="#!">
                            <span>{{ ucfirst(\Auth::user()->first_name) }}</span>
                            <i class="ti-angle-down"></i>
                        </a>
                        <ul class="show-notification profile-notification">
                            
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="ti-layout-sidebar-left"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    
</nav>




<div>
    
    @yield('content')
</div>
<footer>
    <div class="col-sm-12">
        <p class="text-center">Copyright &copy; 2017 Surmount SoftTech Solutions Private Limited</p>
    </div>
</footer>
<!-- Scripts -->
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<!-- Required Jqurey -->
<script type="text/javascript" src="/default/assets/js/bootstrap-growl.min.js"></script>
<script src="{{ asset('js/common.js') }}"></script>


<script type="text/javascript" src="/default/assets/js/jquery.quicksearch.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="/default/assets/js/script.js"></script>
<script type="text/javascript" src="/default/assets/pages/advance-elements/select2-custom.js"></script>
<!-- custom js -->
<script type="text/javascript" src="/default/assets/pages/dashboard/custom-dashboard.js"></script>
<script src="/default/assets/pages/foo-table/js/footable.min.js"></script>
<script type="text/javascript" src="{{asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>
<script src="/default/assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>
<script src="/default/assets/pages/user-profile.js"></script>
<!-- Bootstrap date-time-picker js -->
<script type="text/javascript" src="/default/assets/pages/advance-elements/moment-with-locales.min.js"></script>
<script type="text/javascript" src="/default/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
<script src="/default/assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/default/assets/pages/advance-elements/custom-picker.js"></script>
<script src="/default/assets/js/classie.js"></script>
<script src="/default/assets/js/modalEffects.js"></script>
<script src="/default/assets/pages/filer/custom-filer.js" type="text/javascript"></script>
<script src="/default/assets/pages/filer/jquery.fileuploads.init.js" type="text/javascript"></script>
<!--sticky js-->
<script type="text/javascript" src="/default/assets/pages/sticky/js/trumbowyg.min.js"></script>
<script type="text/javascript" src="/default/assets/pages/sticky/js/jquery.minicolors.min.js"></script>
<script type="text/javascript" src="/default/assets/pages/sticky/js/jquery.postitall.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="/default/assets/pages/sticky/js/sticky.js"></script>
@yield('scripts')
</body>
</html>