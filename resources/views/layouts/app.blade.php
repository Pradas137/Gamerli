<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/breadcrumbs.css') }}">        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">   
        <title>Gamerli</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/breadcrumb.js') }}"></script>
        <style>
            input{
                color: black;
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-gray-800 dark:text-white bg-base">
        <div class="min-h-screen min-w-max">

            <!-- Page Heading -->
            @if(Auth::user()->role == 'admin')
                <x-header-admin />
            @else
                <x-header-user />
            @endif
            <div class="col-md-8">
                @yield('breadcrumbs')
            </div>
            <!-- Page Content -->
            <main>
                {{ $slot ?? '' }}
            </main>
            @if(Auth::user()->role == 'admin')
                <x-footer-admin />
            @else
                <x-footer-user />
            @endif
        </div>
    </body>
</html>