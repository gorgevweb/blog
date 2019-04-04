<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Blog task ADMIN</title>
    <!-- Vector CSS -->
    <link href="{{asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/plugins/dropzone/css/dropzone.css')}}" rel="stylesheet" type="text/css">
    <!-- simplebar CSS-->
    <link href="{{asset('admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet"/>
<!-- animate CSS-->
    <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/v4-shims.css">
    <!-- Sidebar CSS-->
    <link href="{{asset('admin/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('admin/css/app-style.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('admin/css/fontawesome-iconpicker.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('admin/js/jquery-migrate-3.0.1.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/v4-shims.js"></script>
    @routes
</head>

<body class="bg-theme bg-theme1">


<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="{{route('admin.index')}}">
                <img src="{{asset('images/logo.png')}}" class="logo-icon" alt="logo">
                <h5 class="logo-text">Admin</h5>
            </a>
        </div>

        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('admin.index')}}" class="waves-effect">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Blog</span>
                </a>
            </li>

        </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void(0);">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>

            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="{{asset('admin/images/avatars/avatar-13.png')}}" class="img-circle" alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="javaScript:void(0);">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3" src="{{asset('admin/images/avatars/avatar-13.png')}}" alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                        <p class="user-subtitle">mccoy@example.com</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><a class="dropdown-item" href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <i class="icon-power mr-2"></i></a></li>

                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
    @yield('admin.content')
    <a href="javaScript:void(0);" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                &copy; Copyrights <script>new Date().getFullYear()>2010&&document.write(new Date().getFullYear());</script> All Rights Reserved
            </div>
        </div>
    </footer>
    <!--End footer-->


</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<!-- simplebar js -->
<script src="{{asset('admin/plugins/simplebar/js/simplebar.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{asset('admin/js/sidebar-menu.js')}}"></script>
<!-- loader scripts -->
{{--<script src="{{asset('admin/js/jquery.loading-indicator.js')}}"></script>--}}
<!-- Custom scripts -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.min.js"></script>--}}
<script src="{{asset('admin/js/app-script.js')}}"></script>
<!-- Chart js -->
<script src="{{asset('admin/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-multi-select/jquery.multi-select.js')}}"></script>
<script src="{{asset('admin/plugins/Chart.js/Chart.min.js')}}"></script>
<!-- Vector map JavaScript -->
{{--<script src="{{asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>--}}
{{--<script src="{{asset('admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>--}}
<script src="{{asset('admin/js/fontawesome-iconpicker.min.js')}}"></script>
<!-- Easy Pie Chart JS -->
<script src="{{asset('admin/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>

<!-- Sparkline JS -->
<script src="{{asset('admin/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-knob/excanvas.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-knob/jquery.knob.js')}}"></script>

<script>
    $(function() {
        $(".knob").knob();
    });
</script>
@yield('script')
<!-- Index js -->
<script src="{{asset('admin/js/index.js')}}"></script>
<script src="{{asset('admin/plugins/alerts-boxes/js/sweetalert.min.js')}}"></script>
<script src="{{asset('admin/plugins/alerts-boxes/js/sweet-alert-script.js')}}"></script>
</body>
</html>
