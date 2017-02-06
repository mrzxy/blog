const elixir = require('laravel-elixir');

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

   var config =  elixir.webpack.mergeConfig({
        entry: {
        	index: './resources/assets/js/home/index.js'
        },

        output: {
        	filename: '[name].js' // Template based on keys in entry above
        }
	});

    mix.webpack('app.js');
    mix.styles([
    	'home/normalize.min.css',
    	'home/grid.css',
    	'home/style.css',
    ]);
});
