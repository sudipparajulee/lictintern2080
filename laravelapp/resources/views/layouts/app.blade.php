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

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 fixed h-screen bg-gray-100 shadow">
                <img src="{{asset('images/logo.png')}}" class="mt-5 w-full" alt="">
                <div class="mt-5 text-blue-900">
                    <a href="{{route('dashboard')}}" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-dashboard-2-line"></i> Dashboard</a>
                    <a href="{{route('notice.index')}}" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-file-paper-2-line"></i> Notice</a>
                    <a href="{{route('client.index')}}" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-group-line"></i> Clients</a>
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-window-line"></i> Projects</a>
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-news-line"></i> Blogs</a>
                    <a href="" class="p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-contacts-book-line"></i> Contacts</a>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="p-2 block w-full text-left hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-logout-box-line"></i> Logout</button>
                    </form>

                </div>
            </div>
            <div class="p-4 w-full pl-60">
                <h1 class="text-3xl font-bold text-indigo-600">@yield('heading')</h1>
                <hr class="my-2 h-1 bg-red-600">
                @yield('content')
            </div>
        </div>
    </body>
</html>
