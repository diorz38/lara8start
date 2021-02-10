<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Azia</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/azia.css') }}"> --}}
    <!-- vendor css -->
    <link href="{{ asset('tema/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('tema/css/azia.css') }}">

    </head>
    <body>
        @include('azia::partials.az-header')

        @yield('content')

        @include('azia::partials.az-footer')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/azia.js') }}"></script> --}}
        <script src="{{ asset('tema/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('tema/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('tema/lib/ionicons/ionicons.js') }}"></script>
        @stack('libs-js')

        <script src="{{ asset('tema/js/azia.js') }}" type="text/javascript"></script>
        <script src="{{ asset('tema/js/jquery.cookie.js') }}" type="text/javascript"></script>
        @stack('page-js')
    </body>
</html>
