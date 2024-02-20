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


        <script>
            // On page load or when changing themes, best to add inline in head to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
    </head>
    <body class="font-sans antialiased dark:bg-gray-700 dark:text-gray-100">
        <div class="flex">
            <div class="w-56 fixed h-screen bg-gray-100 dark:bg-gray-800 shadow">
                <img src="{{asset('images/logo.png')}}" class="mt-5 w-full" alt="">
                <div class="mt-5 text-blue-900 dark:text-gray-100">
                    <a href="{{route('dashboard')}}" class="@if(request()->routeIs('dashboard')) bg-blue-500 text-white @endif p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-dashboard-2-line"></i> Dashboard</a>
                    <a href="{{route('notice.index')}}" class="@if(request()->routeIs('notice.*')) bg-blue-500 text-white @endif p-2 block hover:bg-blue-500 hover:text-white text-lg border-b border-gray-300"><i class="ri-file-paper-2-line"></i> Notice</a>
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
                <h1 class="text-3xl font-bold text-indigo-600 dark:text-gray-200">@yield('heading')</h1>
                <div class="text-right">
                    <button id="theme-toggle" type="button"
                        class="text-gray-300 bg-gray-500 dark:text-gray-300 hover:bg-gray-400 border-gray-300 dark:hover:bg-gray-700 dark:border-gray-700 focus:outline-none rounded-lg text-sm  lg:py-0.5 lg:px-3 py-0.5 px-2">
                        <p id="theme-toggle-dark-icon" class="hidden  lg:text-sm">
                            <i class="ri-moon-fill"></i>
                        </p>
                        <p id="theme-toggle-light-icon" class="hidden  lg:text-sm">
                            <i class="ri-sun-fill"></i>
                        </p>
                    </button>
                </div>
                <hr class="my-2 h-1 bg-red-600">
                @yield('content')
            </div>
        </div>
        <script>
            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            // Change the icons inside the button based on previous settings
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                themeToggleLightIcon.classList.remove('hidden');
            } else {
                themeToggleDarkIcon.classList.remove('hidden');
            }

            var themeToggleBtn = document.getElementById('theme-toggle');

            themeToggleBtn.addEventListener('click', function() {

                // toggle icons inside button
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');

                // if set via local storage previously
                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }

                    // if NOT set via local storage previously
                } else {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }

            });
        </script>
    </body>
</html>
