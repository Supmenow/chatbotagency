var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix

    	.sass('app.scss')
    	
    	.copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery.js')
    	
    	.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'resources/assets/js/bootstrap.js')

    	.copy('node_modules/bootstrap/fonts/glyphicons-halflings-regular.woff', 'public/build/fonts/bootstrap/glyphicons-halflings-regular.woff')
        .copy('node_modules/bootstrap/fonts/glyphicons-halflings-regular.woff2', 'public/build/fonts/bootstrap/glyphicons-halflings-regular.woff2')
        .copy('node_modules/bootstrap/fonts/glyphicons-halflings-regular.eot', 'public/build/fonts/bootstrap/glyphicons-halflings-regular.eot')
        .copy('node_modules/bootstrap/fonts/glyphicons-halflings-regular.ttf', 'public/build/fonts/bootstrap/glyphicons-halflings-regular.ttf')
        .copy('node_modules/bootstrap/fonts/glyphicons-halflings-regular.svg', 'public/build/fonts/bootstrap/glyphicons-halflings-regular.svg')
    	
    	.scripts(['jquery.js','bootstrap.js'],'./public/js/app.js')

    	.version(['/js/app.js','/css/app.css']);;
});
