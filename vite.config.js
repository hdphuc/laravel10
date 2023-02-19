import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    base: '/',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            buildDirectory: '/assets',
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
              {
                src: 'resources/assets_template/css/**/*',
                dest: 'assets_template/css/'
              },
              {
                src: 'resources/assets_template/img/**/*',
                dest: 'assets_template/img/'
              },
              {
                src: 'resources/assets_template/js/*',
                dest: 'assets_template/js/'
              },
              {
                src: 'resources/assets_template/fonts/*',
                dest: 'assets_template/fonts/'
              },
              {
                src: 'resources/css/home.css',
                dest: 'web/css/'
              },
              {
                src: 'resources/js/home.js',
                dest: 'web/js/'
              },
              {
                src: 'resources/img/**/*',
                dest: 'web/img/'
              },
            ]
          })
    ],
});
