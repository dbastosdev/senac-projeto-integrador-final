<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="robots" content="noindex"/>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        {{-- csrf token from framework --}}
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <title>@yield('title') - {{ config('app.name') }}</title>

        {{-- favicons --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('build/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('build/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('build/favicons/favicon-16x16.png') }}">

        {{-- css compiled assets from vite --}}
        @vite('resources/css/app.css')
        @vite('resources/css/contrast.css')
        @vite('resources/css/guest.css')
        @vite('resources/scss/app.scss')
        @vite('node_modules/materialize-css/sass/materialize.scss')
    </head>
    <body>
        <div id="app">
            <header>
                @yield('menu')

                @yield('breadcrumbs')
            </header>


            <main id="conteudo" style="margin-top:50px;" class="container">
                <div class="row">
                    <div class="col s12">
                        @include('components.messages')

                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

        @include('components.footer')

        {{-- js compiled assets from vite --}}
        <script src="{{ asset('build/js/acessibilidade.js') }}"></script>
        @vite('resources/js/materialize-start.js')  
        @vite('resources/js/app.js')  
        @vite('node_modules/materialize-css/dist/js/materialize.js?commonjs-entry') 

    </body>
</html>