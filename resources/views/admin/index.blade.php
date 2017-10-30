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
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!--JS -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/admin/suppliers">Поставщики</a></li>
                    <li><a href="">Бренды</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        @include('admin.inc.msg')
        @yield('content')
    </div>
</div>
<div id="app"></div>
</body>
</html>