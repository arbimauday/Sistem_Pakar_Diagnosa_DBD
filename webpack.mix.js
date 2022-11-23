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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'));


mix.sass('resources/css/core/admin-theme.scss', 'public/scaffolding/core-admin/css');
mix.sass('resources/css/core/_page-auth.scss', 'public/scaffolding/core-admin/css');


/*
 |--------------------------------------------------------------------------
 | General folder plugins and assets images
 |--------------------------------------------------------------------------
 |
 */

mix.copyDirectory('resources/assets/landing', 'public/scaffolding/landing');
mix.copyDirectory('resources/assets/admin/images/icons', 'public/scaffolding/icons');
mix.copyDirectory('resources/assets/plugins/feather-icons', 'public/scaffolding/plugins/feather-icons');
mix.copyDirectory('resources/assets/plugins/pace', 'public/scaffolding/plugins/pace');
mix.copyDirectory('resources/assets/plugins/jquery', 'public/scaffolding/plugins/jquery');
mix.copyDirectory('resources/assets/plugins/jquery-scrollbar', 'public/scaffolding/plugins/jquery-scrollbar');
mix.copyDirectory('resources/assets/plugins/notification', 'public/scaffolding/plugins/notification');
mix.copyDirectory('resources/assets/plugins/slick', 'public/scaffolding/plugins/slick');

mix.copy('resources/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', 'public/scaffolding/plugins/bootstrap-datepicker');
mix.copy('resources/assets/plugins/bootstrap-datepicker/css/datepicker3.css', 'public/scaffolding/plugins/bootstrap-datepicker');

mix.copy('resources/assets/plugins/bootstrap-daterangepicker/daterangepicker.js', 'public/scaffolding/plugins/date-rangepicker');
mix.copy('resources/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css', 'public/scaffolding/plugins/date-rangepicker');

mix.copy('resources/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js', 'public/scaffolding/plugins/timepicker');
mix.copy('resources/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css', 'public/scaffolding/plugins/timepicker');

mix.copy([
    'resources/assets/plugins/bootstrap/bootstrap.js',
    'resources/assets/plugins/modernizr.custom.js',
    'resources/assets/plugins/jquery-ui/jquery-ui.min.js',
    'resources/assets/plugins/tether/js/tether.min.js',
    'resources/assets/plugins/jquery/jquery-easy.js',
    'resources/assets/plugins/jquery-card-toggle.js',
    'resources/assets/plugins/jquery-actual/jquery.actual.min.js',
    'resources/assets/plugins/moment/moment.min.js',
    'resources/assets/plugins/jquery.sieve.min.js',
    'resources/assets/plugins/accounting.min.js',

], 'public/scaffolding/plugins/');
