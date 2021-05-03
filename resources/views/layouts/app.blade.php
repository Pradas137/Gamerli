<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Matriculació IETI</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            input{
                color: black;
            }
        </style>
    </head>
    <body class="bg-blue-700 font-sans antialiased">
        <div class="min-h-screen bg-base dark:bg-blue-800 dark:text-white min-w-max">

            <!-- Page Heading -->
            <x-header />
            <!-- Page Content -->
            <main class="flex flex-col h-screen">
            <div class="flex flex-1 overflow-hidden">
            <x-nav-vertical />
            <div class="flex flex-1 flex-col">
                {{ $slot ?? '' }}
            </main>

            <x-footer />
        </div>
    </body>
</html>