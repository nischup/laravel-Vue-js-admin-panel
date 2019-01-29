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
	.js('resources/js/team-member/team-member.js', 'public/js')
	.js('resources/js/quote-message/quote.js', 'public/js')
	.js('resources/js/quote-message/contact.js', 'public/js')
	.js('resources/js/message/message.js', 'public/js')
	.js('resources/js/service/service.js', 'public/js')
	.js('resources/js/gallery/gallery.js', 'public/js')
	.js('resources/js/admin/admin.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
