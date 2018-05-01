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

mix.js('resources/assets/js/custom.js', 'public/js')
      .sass('resources/assets/sass/app.sass', '../resources/assets/css/')
      .combine(
      		[
      		'resources/assets/js/slick.js',
      		'resources/assets/js/custom.js'
      		], 'public/js/all.js')
      .combine(
      		[
      		'resources/assets/css/icons-font.css',
      		'resources/assets/css/bootstrap.min.css',
      		'resources/assets/css/slick.css',
      		'resources/assets/css/app.css'
      		], 'public/css/all.css');