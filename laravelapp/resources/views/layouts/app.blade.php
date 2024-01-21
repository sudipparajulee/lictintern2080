<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 h-screen bg-gray-200 shadow">
                <img src="{{asset('images/logo.png')}}" class="mt-5 w-full" alt="">
                <div>
                    Menu here
                </div>
            </div>
            <div class="p-4 flex-1">
                @yield('content')
            </div>
        </div>
    </body>
</html>
