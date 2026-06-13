import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        react(),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true,
                // Ini akan menyembunyikan peringatan deprecation @import
                silenceDeprecations: ["import", "global-builtin"],
            },
        },
    },
});
