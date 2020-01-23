const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
   .sass('resources/sass/app.scss', 'public/css');
=======
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> a2368cd391354eaa5f7b7dbc472aac5da1e7341d
