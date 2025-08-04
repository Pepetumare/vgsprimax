import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // Solo dejamos app.js como el punto de entrada
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
});