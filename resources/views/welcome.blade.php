<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}</title>
        <meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" value="summary">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ isset($seo['url']) ? $seo['url'] : config('app.url') }}" />
        <meta property="og:image" content="{{ isset($seo['imagem']) ? $seo['imagem'] : config('seo.imagem') }}" />
        <meta property="og:description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}" />

        <link href="{{ asset('site/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('site/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- core CSS -->
        <link href="{{ asset('site/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('site/css/prettyPhoto.css') }}" rel="stylesheet">
        <link href="{{ asset('site/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('site/css/responsive.css') }}" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="{{ asset('site/css/agency.min.css') }}" rel="stylesheet">

    </head>
    <body id="page-top" class="index">

        @include('site._nav')

        @include('site._header')

        @include('site._portfolio')

        @include('site._services')

        @include('site._about')

        @include('site._team')

        @include('site._contact')

        @include('site._footer')

    <!-- jQuery -->
    <script src="{{ asset('site/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('site/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('site/js/jquery.easing.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('site/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('site/js/contact_me.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('site/js/agency.min.js') }}"></script>
    </body>
</html>
