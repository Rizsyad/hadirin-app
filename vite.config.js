import { defineConfig, loadEnv } from "vite";
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ mode }) => {
    process.env = { ...process.env, ...loadEnv(mode, process.cwd(), "") };

    return {
        // server: {
        //     hmr: {
        //         host: process.env.HOST,
        //     },
        // },
        plugins: [
            laravel({
                input: ["resources/css/app.css", "resources/js/app.js"],
                refresh: true,
            }),
        ],
    };
});

// export default defineConfig({
//     server: {
        // hmr: {
        //     host: import.meta.env.HOST,
        // },
//     },
//     plugins: [
        // laravel({
        //     input: ["resources/css/app.css", "resources/js/app.js"],
        //     refresh: true,
        // }),
//     ],
// });
