<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
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
    <link href="{{ asset('css/corlate/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corlate/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corlate/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corlate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corlate/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corlate/responsive.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('site/css/agency.min.css') }}" rel="stylesheet">

</head>
<body id="app-layout">

    @include('layouts._site._nav')

<main>
    @if(Session::has('mensagem'))
        <div class="container">
            <div class="row">
                <div class="card {{ Session::get('mensagem')['class'] }}">
                    <div align="center" class="card-content">
                        {{ Session::get('mensagem')['msg'] }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    @yield('content')
</main>

    @include('layouts._site._footer')


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
</body>
</html>
