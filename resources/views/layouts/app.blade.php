<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-model-controller</title>

        <!-- Fonts -->

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">

        <header>

            @include('partials.header')

        </header>
        <main>
            @yield('content')
        </main>
        <footer>

            @include('partials.footer')

        </footer>
        
    </body>
</html>
