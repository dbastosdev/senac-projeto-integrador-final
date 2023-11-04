<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

    {{-- csrf token from framework --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Área de Administrador</title>

    @yield('head')

    {{-- favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('build/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('build/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('build/favicons/favicon-16x16.png') }}">

    {{-- css compiled assets from vite --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    @vite('resources/css/app.css')
    @vite('resources/css/admin.css')
    @vite('resources/css/contrast.css')
    @vite('resources/scss/app.scss')
    @vite('node_modules/materialize-css/sass/materialize.scss')
</head>

    <body>

        <div id="app">

             {{-- SideBar --}}
            @include('admin.layouts.partials.sidenav')

            {{-- Navbar --}}
            @include('admin.layouts.partials.navbar')

            <main role="main">
                @include('admin.layouts.partials.breadcrumbs')

                <div class="container col s12 m8 l9" id="vue-app">

                    @include('admin.layouts.partials.messages')

                    {{-- Content --}}
                    @yield('content')

                </div>

            </main>

            <footer class="page-footer grey lighten-5 grey-text text-darken-3 on-contrast-force-black">
                <div class="container">

                    {{-- Footer --}}
                    @include('admin.layouts.partials.footer')

                </div>
            </footer>

        </div>

        {{-- Scripts --}}
        @include('admin.layouts.partials.footer-scripts')
        @yield('scripts')

    </body>

</html>
