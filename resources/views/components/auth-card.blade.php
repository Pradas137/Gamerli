<div style="background-image: url(/images/fondoGamer.jpg)" class="text-sm-center min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div style="background-image: url(/images/fondonegro.jpg)" class="text-sm-center bg-red-700 w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
