let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .copyDirectory('resources/assets/images', 'public/img')
    //.copy('node_modules/sweetalert/dist/sweetalert.css', 'resources/assets/sass/_sweetalert.scss')
   .sass('resources/assets/sass/app.sass', 'public/css');
