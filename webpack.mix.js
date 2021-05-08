const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/plugins/select2/css/select2.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
    'resources/assets/admin/css/adminlte.min.css',
    'resources/assets/admin/css/blue.css',
    'resources/assets/admin/css/ionicons.min.css',
    'public/assets/admin/ckeditor5/sample/styles.css',
], 'public/assets/admin/css/admin.css');

mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/css/style.css',
], 'public/assets/front/css/style.css');

mix.scripts([
    'resources/assets/admin/js/move-top.js',
    'resources/assets/admin/js/easing.js',
    'resources/assets/admin/js/responsiveslides.min.js',
], 'public/assets/front/js/scripts.js');
mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/select2/js/select2.full.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
], 'public/assets/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/img','public/assets/admin/img');
mix.copyDirectory('resources/assets/admin/img/images','public/assets/admin/img');
mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts','public/assets/admin/webfonts');

mix.copy('resources/assets/admin/css/adminlte.min.css.map','public/assets/admin/css/adminlte.min.css.map');
mix.copy('resources/assets/admin/js/adminlte.min.js.map','public/assets/admin/js/adminlte.min.js.map');