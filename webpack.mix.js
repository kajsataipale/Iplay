const mix = require('laravel-mix');

require('dotenv').config();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

const theme = process.env.WP_THEME;

mix.setResourceRoot('../');
mix.setPublicPath(`public/themes/${theme}/assets`);

mix.js('resources/assets/scripts/app.js', 'scripts');
mix.sass('resources/assets/styles/app.scss', 'styles');

// mix.browserSync({
//   proxy: 'localhost:9001',
//   files: [
//     './public/**'
//   ]
// });

// mix.browserSync({
//     proxy: '127.0.0.1',
//
// })

// mix.browserSync('127.0.0.1');
// mix.sourceMaps();

mix.browserSync('http://localhost:8888');

mix.version();
