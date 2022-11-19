import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
   
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/styles.css',
                'resources/css/normalize.css',
                'resources/js/app.js',
                'resources/js/questions.js',
                'resources/js/slider.js',
                'resources/js/menu.js',
            ],
            refresh: true,
            
        }),
    ],
   
});
