{{-- js compiled assets from vite --}}
<script src="{{ asset('build/js/acessibilidade.js') }}"></script>
@vite('resources/js/materialize-start.js')  
@vite('resources/js/app.js')  
@vite('node_modules/materialize-css/dist/js/materialize.js?commonjs-entry') 
