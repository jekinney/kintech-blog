const elixir = require('laravel-elixir');

require('laravel-elixir-materialize-css');
require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    //mix.materialize(); //webpack('app.js');
    mix.scriptsIn('public/js/');
    mix.version(['css/materialize.css', 'js/all.js']);
});
