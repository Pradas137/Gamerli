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

            body {
                font-family: 'Nunito', sans-serif;
                background: url("/images/fondoGamer.jpg");
            }
    .carousel {
    border-style:solid;
    border-width:1px;
    border-color:rgba(0, 0, 0, 0.05);
    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.1);
    widht:100%;
    height:250px;
}

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
    height:250px;
}

.carousel-open:checked + .carousel-item {
    position: absolute;
    opacity: 100;
    background-color:white;
    width:100%;
    height:250px;
}

.carousel-item {
    position: absolute;
    opacity: 0;
    padding-top:10px;
    text-align:center;
}

.carousel-control {
    background: rgba(0, 0, 0, 0);
    border-radius: 50%;
    color:#008c6c;
    cursor: pointer;
    display: none;
    font-size: 30px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
}

.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.05);
    color: #008c6c;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3,
#carousel-4:checked ~ .control-4 {
    display: block;
}

.carousel-indicators {
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2px;
    left: 0;
    right: 0;
    text-align: center;
}

.carousel-indicators li {
    display: inline-block;
    margin: 0 5px;
}

.carousel-bullet {
    color: rgba(0, 0, 0, 0.05);
    cursor: pointer;
    font-size: 25px;
}

.carousel-bullet:hover {
    color: rgba(0, 0, 0, 0.1);
}

#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet,
#carousel-4:checked ~ .control-4 ~ .carousel-indicators li:nth-child(4) .carousel-bullet {
    color: blue;
}
#imgeranking{
    background-size: 300px 200px;
}
    </style>
    </head>
    <body class="font-sans antialiased dark:bg-gray-800 dark:text-white bg-base">
    @include('message_flash')

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