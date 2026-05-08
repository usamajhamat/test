import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/main.jsx'],
            refresh: true,
        }),
        react({
            fastRefresh: true,
            jsxRuntime: 'automatic',
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5174,
        strictPort: true,
        cors: true,
        hmr: {
            host: 'localhost',
            protocol: 'ws',
            port: 5174,
        },
        watch: {
            usePolling: true,
            interval: 1000,
        },
    },
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
    optimizeDeps: {
        include: ['react', 'react-dom', 'react-router-dom'],
        esbuildOptions: {
            target: 'es2020',
        },
    },
    build: {
        outDir: 'public/build',
        manifest: 'manifest.json',
        rollupOptions: {
            input: 'resources/js/main.jsx',
        },
    },
});