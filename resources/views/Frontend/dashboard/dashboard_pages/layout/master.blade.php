<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- styles / CDN -->
     @include('Frontend.dashboard.dashboard_pages.layout.partials.styles')
     @yield('styles')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

        <!-- sidebar menu area start -->
        @include('Frontend.dashboard.dashboard_pages.layout.partials.sidebar')
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">

            <!-- header area start -->
            @include('Frontend.dashboard.dashboard_pages.layout.partials.header')
            <!-- header area end -->

            @yield('user-content')

        </div>
        <!-- main content area end -->

        <!-- footer area start-->
        @include('Frontend.dashboard.dashboard_pages.layout.partials.footer')
        <!-- footer area end-->

    </div>
    <!-- page container area end -->

    <!-- offset area start -->
    @include('Frontend.dashboard.dashboard_pages.layout.partials.offsets')
    <!-- offset area end -->

    <!-- scripts  -->
    @include('Frontend.dashboard.dashboard_pages.layout.partials.scripts')
    @yield('scripts')

</body>

</html>