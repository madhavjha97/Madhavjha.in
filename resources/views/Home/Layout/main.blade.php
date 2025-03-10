<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Madhav Jha')</title>
    <meta name="description" content="@yield('description', 'Madhav Jha')">
    <meta name="author" content="madhavjha.in">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
</head>

<!-- Display Success Message -->
@if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
@endif

@if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
@endif

@if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}");
@endif

@if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}");
@endif



<body class="body header-fixed counter-scroll is_light">

<!-- Preloader -->
<div class="preload preload-container">
    <div class="e-loadholder">
        <div class="m-loader">
            <span class="e-text">Namaste</span>
        </div>
    </div>
</div>
<!-- /Preloader -->

<div id="wrapper">
    <div id="page" class="clearfix">

        <!-- Include Navbar -->
        @include('Home.Layout.navbar')

        <!-- Main Content -->
        @yield('content')

        <!-- Include Footer -->
        @include('Home.Layout.footer')
        @include('Home.Layout.footer-menu')

    </div>
    <!-- /#page -->
</div>
<!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- JavaScript -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/js/countto.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/jquery-validate.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/animated-headline.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<script src="{{ asset('assets/js/shortcodes.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/slider-title.min.js') }}"></script>

@stack('scripts') <!-- To allow adding extra scripts in child templates -->

</body>
</html>
