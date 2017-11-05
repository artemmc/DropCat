<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!--JS -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<header>
    @include('site.inc.top-menu')
</header>
<div class="container">
    <div class="row">
        @include('site.inc.msg')
        @yield('content')
    </div>
</div>
<div id="app"></div>
</body>
</html>