<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css') }}"
          rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('css/app_1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app_2.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<header id="header" class="clearfix" data-ma-theme="blue">
    @include('layouts._admin._header')
</header>

<section id="main">
    @yield('breadcrumb')

    @include('layouts._admin._leftmenu')

    <section id="content">
        <div class="container">

            @yield('content')

        </div>
    </section>
</section>

<footer id="footer">
    @include('layouts._admin._footer')
</footer>

<!-- Javascript Libraries -->
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('vendors/bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
<script src="{{ asset('vendors/sparklines/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

<script src="{{ asset('vendors/fileinput/fileinput.min.js') }}"></script>
<script src="{{ asset('vendors/farbtastic/farbtastic.min.js') }}"></script>

<script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<script src="{{ asset('vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>

<script src="{{ asset('js/appLayout.min.js') }}"></script>

@stack('scripts')
</body>
</html>
