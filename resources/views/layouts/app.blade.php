<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:locale" content="lv_LV" />
        @yield('head')

        <!-- Scripts -->
        @vite([asset('resources/css/app.css'), asset('resources/js/app.js')])


    </head>
        @include('layouts.navigation');
        <body class="dark:bg-gray-900">
            
        </body>
</html>
