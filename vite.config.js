import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { visualizer } from "rollup-plugin-visualizer";
import fs from "fs";
import path from "path";

const getFiles = (dir, ext, fileList = []) => {
    const files = fs.readdirSync(dir);
    files.forEach((file) => {
        const filePath = path.join(dir, file);

        if (fs.statSync(filePath).isDirectory()) {
            getFiles(filePath, ext, fileList);
        } else if (path.extname(file) === ext) {
            fileList.push(filePath);
        }
    });

    return fileList;
};

// const cssFiles = getFiles('resources/css', '.css');
// const jsFiles = getFiles('resources/js', '.js');

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/js/admin/login.js",
                "resources/js/admin/admin.js",
            ],
            refresh: true,
            alias: {
                "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
            },
        }),
        visualizer({ open: true }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                silenceDeprecations: [
                    "import",
                    "mixed-decls",
                    "color-functions",
                    "global-builtin",
                ],
            },
        },
    },
});
