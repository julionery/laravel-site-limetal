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
    <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}"
          rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('css/app_login.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
<div class="login-content">
    <!-- Login -->
    <div class="lc-block toggled" id="l-login">

        <div class="lcb-form">
            <div class="row">
                <div align="center" class="col-xs-12">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo2.png') }}" class="img-responsive"
                                                  style="padding-bottom: 40px"/></a>
                </div>
            </div>

            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="fg-line">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                               required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="fg-line">
                        <input id="password" type="password" placeholder="Senha" class="form-control" name="password"
                               required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <i class="input-helper"></i>
                        Lembre de mim
                    </label>
                </div>
                <button type="submit" class="btn btn-login btn-success"><i class="zmdi zmdi-arrow-forward"></i></button>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </form>
        </div>

        <div class="lcb-navigation">
            <a href="{{ route('password.request') }}" data-ma-block="#l-forget-password"><i>?</i>
                <span>Esqueceu a senha? </span></a>
        </div>
    </div>
</div>

<!-- Javascript Libraries -->
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/Waves/dist/waves.min.js') }}"></script>

<script src="{{ asset('js/appLayout.min.js') }}"></script>
</body>
</html>