var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.copy('vendor/bower/jquery/dist/jquery.js', 'resources/js/jquery.js')
        .copy('vendor/bower/bootstrap/dist/js/bootstrap.js', 'resources/js/bootstrap.js')
        .copy('vendor/bower/underscore/underscore.js', 'resources/js/underscore.js')
        .copy('vendor/bower/handlebars/handlebars.js', 'resources/js/handlebars.js')
        .copy('vendor/bower/backbone/backbone.js', 'resources/js/backbone.js')
        .copy('vendor/bower/nprogress/nprogress.js', 'resources/js/nprogress.js')
        .copy('vendor/bower/metisMenu/dist/metisMenu.js', 'resources/js/metisMenu.js')
        .copy('vendor/bower/jquery-pjax/jquery.pjax.js', 'resources/js/jquery.pjax.js')
        .copy('vendor/bower/bootstrap/dist/css/bootstrap.css', 'resources/css/bootstrap.css')
        .copy('vendor/bower/fontawesome/css/font-awesome.css', 'resources/css/font-awesome.css')
        .copy('vendor/bower/nprogress/nprogress.css', 'resources/css/nprogress.css')
        .copy('vendor/bower/metisMenu/dist/metisMenu.css', 'resources/css/metisMenu.css');


    mix.scripts([
        'jquery.js',
        'bootstrap.js',
        'handlebars.js',
        'underscore.js',
        'backbone.js',
        'nprogress.js',
        'metisMenu.js',
        'jquery.pjax.js',
        //'diagal.js',
    ], 'public/js/vendors.js');

    mix.stylus('style.styl', 'resources/css');

    mix.styles([
        'bootstrap.css',
        'nprogress.css',
        'font-awesome.css',
        'metisMenu.css',
        'style.css'
    ], 'public/css/main.css');

});
