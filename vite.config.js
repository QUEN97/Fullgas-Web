import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        minify: 'terser', 
        terserOptions: {
          compress: {
            drop_console: true // Elimina console.log
          }
        },
        sourcemap: false // Desactiva source maps en producción
      },
});
