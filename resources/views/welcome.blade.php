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
            <div class="sm:flex md:flex lg:flex xl:flex justify-center items-center min-h-screen bg-base">
                <div class="sm:flex md:flex lg:flex xl:flex h-50 bg-red-600 container bg-admin text-center w-2/4 rounded-xl p-5 shadow-xl">
                    <div class="bg-red-600 h-48 content-start p-7 w-34 boder-r border-gray-100">
                        <ul>
                            <li class="flex mb-8">
                                <a href="{{ route('login') }} " class="py-2 px-4 bg-red-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Login</a>
                            </li>
                            <li class="flex mb-8">
                                <a href="{{ route('register') }} " class=" py-2 px-4 bg-red-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Register</a>
                            </li>

                            <li class="flex mb-8">
                                <a href=" " class="py-2 px-4 bg-red-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Visitet</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6">
                        <h1 class="text-6xl md:text-6xl font-bold md:font-semibold text-user">Gamerli</h1>
                        <p class="my-8 text-base">Nuestro proyexto es una web para gestionar los videojuegos en listas, incluye rankings y un sistema de amigos Carlos, Adrian.</p>
                        <div class="flex my-5 justify-center">
				                <i style="background-color: #3B5998;" class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-facebook-f"></i>
				                <i style="background-color:#125688;" class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-instagram"></i>
                                <i style="background-color:#55ACEE;" class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-twitter"></i>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>