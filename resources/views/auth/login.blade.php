<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gamerli</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: url("/images/fondoGamer.jpg");

            }

        </style>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: url("/images/fondoGamer.jpg");

            }
            svg{
                fill: yellow;
            }
        </style>
    </head>
    <body class="font-sans antialiased">

        <div style="background-image: url(https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg)" class=" min-h-screen min-w-max">

        <!--<div class="min-h-screen min-w-max">-->

            <x-auth-card>
                <x-slot name="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="100"><g id="Outline"><g><path d="M61.94,47.764l-3.315-9.106a1,1,0,1,0-1.878.684l2.971,8.166L55,49.225V23a1,1,0,0,0-2,0V54H23a1,1,0,0,0,0,2h3.627l1.483,4.076a1,1,0,0,0,.94.658.979.979,0,0,0,.342-.061L42.233,56H54a1,1,0,0,0,1-1V51.353l6.342-2.308a1,1,0,0,0,.6-1.281ZM29.648,58.452,28.756,56h7.63Z"/><path d="M19,35.044v2.831a1,1,0,0,0,2,0V10H53v9a1,1,0,0,0,2,0V9a1,1,0,0,0-1-1H47.467L45.522,2.658a1,1,0,0,0-1.281-.6L27.923,8H20a1,1,0,0,0-1,1V29.2l-5.084-13.97L16.735,14.2a1,1,0,1,0-.685-1.879l-3.758,1.368a1,1,0,0,0-.6,1.282ZM43.985,4.282,45.339,8H33.769Z"/><path d="M49,15H31a1,1,0,0,0,0,2H49a1,1,0,0,0,0-2Z"/><path d="M50,20a1,1,0,0,0-1-1H39a1,1,0,0,0-1,1V30a1,1,0,0,0,1,1H49a1,1,0,0,0,1-1Zm-2,9H40V21h8Z"/><path d="M34,21H28a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/><path d="M34,25H25a1,1,0,0,0,0,2h9a1,1,0,0,0,0-2Z"/><path d="M34,29H25a1,1,0,0,0,0,2h9a1,1,0,0,0,0-2Z"/><path d="M34,33H25a1,1,0,0,0,0,2h9a1,1,0,0,0,0-2Z"/><path d="M49,33H40a1,1,0,0,0,0,2h9a1,1,0,0,0,0-2Z"/><path d="M49,37H41a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Z"/><path d="M49,41H38a1,1,0,0,0,0,2H49a1,1,0,0,0,0-2Z"/><path d="M50,46a1,1,0,0,0-1-1H35a1,1,0,0,0,0,2H49A1,1,0,0,0,50,46Z"/><path d="M31,49a1,1,0,0,0,0,2H41a1,1,0,0,0,0-2Z"/><path d="M30.558,47.1l5.428-6.6a1,1,0,0,0,.094-1.134l1.732-1a1,1,0,0,0-1-1.733l-1.732,1a1,1,0,0,0-1.031-.486l-8.428,1.4a.988.988,0,0,0-.336.12L4.5,50.669a5,5,0,0,0,5,8.661l4.585-2.647a1,1,0,1,0-1-1.732l-1.12.646-1-1.731,12.124-7a1,1,0,1,0-1-1.733l-12.124,7-1-1.732,16.454-9.5,3,5.2-11.87,6.854a1,1,0,0,0,1,1.732L30.285,47.33A1.026,1.026,0,0,0,30.558,47.1Zm3.289-7.6v0h0l.152.264L29.93,44.713l-2.557-4.428,6.321-1.052ZM8.732,54h0l1.5,2.6L8.5,57.6a3,3,0,0,1-4.1-1.1,3,3,0,0,1,1.1-4.1l1.733-1Z"/></g></g></svg>
                </x-slot>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                        <x-button class="inline-block align-middle">
                            {{ __('Log in') }}
                        </x-button>
                    </form>
                    <x-button class="inline-block align-middle">
                        <a href="/">Atras</a>
                    </x-button>
                    </div>
            </x-auth-card>
        </div>
    </body>
</html>