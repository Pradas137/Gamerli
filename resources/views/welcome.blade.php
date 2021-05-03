<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gamerli</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-red-400">
        <main>
            <div class="flex justify-center items-center min-h-screen bg-base">
                <div class=" bg-red-600 container bg-admin text-center w-3/4 rounded-xl p-8 shadow-xl">
                    <h1 class="text-6xl md:text-6xl font-bold md:font-semibold text-user">Gamerli</h1>
                    <p class="my-8 text-base">Nuestro proyexto es una web para gestionar los videojuegos en listas, incluye rankings y un sistema de amigos Carlos, Adrian.</p>
                    <a href="{{ route('login') }}" class=" object-none object-left-top py-2 px-4 bg-red-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Log in</a>
                    <a href="{{ route('register') }}" class="py-2 px-4 bg-red-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Registered</a>
                </div>
            </div>
        </main>
    </body>
</html>