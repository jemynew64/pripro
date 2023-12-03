<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tecbus</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
       
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
    <nav x-data="{ open: false }" class="bg-sky-600">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current text-white" />
                    </a>
                </div>

                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-sky-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-white">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-white hover:text-sky-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-white">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-sky-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-white">Registrar</a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </div>
    </nav>
        <div class="flex justify-between py-36 px-36">
            <div class="mb-10 w-1/2">
                <h1 class="text-sky-600 font-mono font-bold text-8xl mb-6" style="font-family: 'Archivo Black', sans-serif;">TECBUS</h1>
                <h2 class="font-sans text-lg mb-6">Conectamos tu jornada diaria con comodidad y seguridad. Descubre un viaje diseñado exclusivamente para la comunidad de Tecsup. ¡Explora el placer de llegar a tu destino con nosotros!</h2>
                <a href="{{ url('https://mail.google.com/mail/u/1?ui=2&ik=35b6120d04&attid=0.1&permmsgid=msg-f:1775305153499861246&th=18a326a1924790fe&view=att&disp=safe&realattid=f_lls5xdmj0') }}" class="inline-block py-4 px-6 text-base bg-sky-600 text-white hover:bg-sky-500 hover:text-white rounded-md">Ver rutas</a>
            </div>
            <div class="item-end">
                <img class="" src="/img/index-image.png">
            </div>
        </div>
        
    </body>
</html>