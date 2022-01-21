<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @yield('styles')
    </head>
    <body>
        
        <div id="app">
            @yield('content')
        </div>

        @livewireScripts
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        @stack('scripts')
    </body>
</html>
