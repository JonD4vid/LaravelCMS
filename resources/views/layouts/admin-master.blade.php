<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Area</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::to('src/css/admin.css') }}">
        @yield('styles')
    </head>
    <body>
        @include('includes.admin-header')
        @yield('content')

        <script type="text/javascript">
            var baseUrl = "{{ URL::to('/') }}";
        </script>

        @yield('scripts')
        </body>
</html>
