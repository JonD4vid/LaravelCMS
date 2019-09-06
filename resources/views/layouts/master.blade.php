<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
        @yield('styles')
    </head>
    <body>
        @include('includes.header')
        <div class="main">
            @yield('content')
        </div>

        <div class="card">
        <h2></div>

        @include('includes.footer')
    </body>
</html>
