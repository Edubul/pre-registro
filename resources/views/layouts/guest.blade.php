<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/arcane.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.rawgit.com/scottschiller/Snowstorm/master/snowstorm-min.js"></script>

    </head>
    <body class="bg-gradient-to-r from-green-600 to-blue-700 text-white ">
        <main class="h-screen md:grid md:grid-cols-2">
            <div class="md:flex md:flex-col md:items-center md:text-center md:my-auto hidden ">
                @if ($errors->any())
                    @foreach ($errors->all() as $item)
                        {{$item}}
                    @endforeach
                @endif
                <div class="img-server h-full">
                    <img src="./img/logo.png" alt="" class="mx-auto">
                    <h1 class="text-pre text-4xl arcaneStyle"><span class="text-yellow-500">Open Beta</span> - Arcane RO</h1>
                    <p>RO:Arc is a new Ragnarök Online Low Rates. With a revamped concept to improve the User Experience. Adventurers, prepare yourselves for the upcoming server</p>
                </div>
            </div>
            {{ $slot }}
        </main>
        @livewireScripts
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            window.addEventListener('swal:modal', event => {
                swal({
                    title: event.detail.title,
                    text: event.detail.text,
                    icon: event.detail.type,
                })
            })

            // 1. Define un color para la nieve
            snowStorm.snowColor = '#fff';
            // 2. Para optimizar, defina el número máximo de copos que pueden
            // aparecer en la pantalla a la vez
            snowStorm.flakesMaxActive = 96;
            // 3. Deje que la nieve entre y salga de la vista
            snowStorm.useTwinkleEffect = true; 
            // 4. ¡Empieza la tormenta de nieve!
            snowStorm.start();

        </script>
    </body>
</html>
