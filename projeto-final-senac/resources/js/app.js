// Import bootstrap with default configuration of laravel
import './bootstrap';
// Import vue optimized for vite
// https://stackoverflow.com/questions/72927325/using-vue3-components-in-laravel-blade-vite 
import {createApp} from 'vue/dist/vue.esm-bundler'

// Import test component
import Test from './Test.vue'

createApp({
    // Register components
    components: {
        Test,
    }
}).mount('#app');


