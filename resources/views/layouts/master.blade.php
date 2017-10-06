<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" class="full-height">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auditoria @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="/libs/mdb/css/bootstrap.css">
    <link rel="stylesheet" href="/libs/mdb/css/mdb.css">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    @yield('css-master')
</head>
<body id="app-layout">

    @yield('content-master')

    <!-- JavaScripts -->
    <script src="/libs/mdb/js/jquery-3.2.1.min.js"></script>
    <script src="/libs/mdb/js/bootstrap.min.js"></script>
    <script src="/libs/mdb/js/popper.min.js"></script>
    <script src="/libs/mdb/js/mdb.min.js"></script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @yield('js-master')
</body>
</html>
