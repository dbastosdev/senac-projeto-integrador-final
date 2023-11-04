import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// vue.js 3 configration:
import vue from '@vitejs/plugin-vue'

// statuc copy config: 
import { viteStaticCopy } from 'vite-plugin-static-copy'


export default defineConfig({
    plugins: [
        // setup vue.js
        vue(), 
        // setup files to be compiled resources to public folder
        laravel({
            input: ['resources/css/app.css', 
                    'resources/css/guest.css',
                    'resources/css/admin.css',
                    'resources/css/contrast.css',
                    'resources/scss/app.scss', 
                    'resources/js/app.js', 
                    'resources/js/materialize-start.js', 
                    'node_modules/materialize-css/dist/js/materialize.js',
                    'node_modules/materialize-css/sass/materialize.scss'],
            refresh: false,
        }),
        viteStaticCopy({
            targets: [
              {
                src: 'resources/js/acessibilidade.js',
                dest: 'js'
              },
              {
                src: 'resources/img',
                dest: ''
              },
              {
                src: 'resources/favicons',
                dest: ''
              }
            ]
          })
    ],
});
