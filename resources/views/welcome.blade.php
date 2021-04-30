<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Matriculació IETI</title>

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
    <body>
        <main>
            <div class="flex justify-center items-center min-h-screen bg-base">
                <div class="container bg-admin text-center w-3/4 rounded-xl p-8 shadow-xl">
                    <h1 class="text-4xl md:text-6xl font-bold md:font-semibold text-user">Matriculació IETI</h1>
                    <p class="my-8 text-base">Project that has the functionality of managing the enrollment of an institute, developed by Iker, Jesus, Adrian.</p>
                    <a href="{{ route('login') }}" class="btn btn-orange">Log in</a>
                    <a href="{{ route('register') }}" class="btn-primary bg-mtr-normal">Registered</a>
                </div>
            </div>
        </main>
    </body>
</html>