import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/auth.css',
                'resources/js/table/home_table.js',
                'resources/css/home.css',
            ],
            refresh: true,
        }),
    ],
});
