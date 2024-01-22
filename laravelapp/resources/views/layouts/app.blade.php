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
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 h-screen bg-gray-100 shadow">
                <img src="{{asset('images/logo.png')}}" class="mt-5 w-full" alt="">
                <div class="mt-5 text-blue-900">
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-dashboard-2-line"></i> Dashboard</a>
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-image-2-line"></i> Banner</a>
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-window-line"></i> Projects</a>
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-news-line"></i> Blogs</a>
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-contacts-book-line"></i> Contacts</a>
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-logout-box-line"></i> Logout</a>

                </div>
            </div>
            <div class="p-4 flex-1">
                @yield('content')
            </div>
        </div>
    </body>
</html>
