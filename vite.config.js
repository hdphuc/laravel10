import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';
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
          src: 'resources/assets_web/',
          dest: ''
        },
        {
          src: 'resources/assets_template/',
          dest: ''
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
