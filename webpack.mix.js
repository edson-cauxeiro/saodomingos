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
/*
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
*/


mix.js([
   'resources/assets/js/jquery.js',
   'resources/assets/js/materialize.js'
   ], 'public/js/scripts.js')
   .styles([
      'resources/assets/css/materialize.css',
      'resources/assets/css/material-icons-font.css',
      'resources/assets/css/custom.css'
    ], 'public/css/style.css');