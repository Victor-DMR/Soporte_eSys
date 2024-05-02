import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/table/home_table.js',
                'resources/js/helper/helper.js',
                'resources/css/auth.css',
            ],
            refresh: true,
        }),
    ],
});
