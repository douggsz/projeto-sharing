<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Article-List.css')}}">
    <link rel="stylesheet" href="{{asset('/css/divider-text-middle.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Header-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title id="titulo">@yield('titulo')</title>
</head>
<body>

<header>
    @yield('header')
</header>

<main role="main">

    @hasSection('body')

        @yield('body')

    @endif
</main>
<div class="footer-dark">
    <footer>
        @yield('footer')
    </footer>
</div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
