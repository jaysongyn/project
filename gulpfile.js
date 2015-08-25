var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor a.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    
     mix.styles([
      'app.css',
      'bootstrap.css',
      'bootstrap.min.css',
      'bootstrap-datetimepicker.min.css',
      'font-awesome.min.css',
      'fullcalendar.css',
      'jquery.cleditor.css',
      'jquery.dataTables.css',
      'jquery.onoff.css',
      'jquery-ui.css',
      'jquery-ui.min.css',
      'prettyPhoto.css',
      'rateit.css',
      'style.css',
      'widgets.css',
     ],'public/css/all.css');
    
     mix.scripts([
      'jquery.js',
      'bootstrap.min.js',
      'jquery-ui.min.js',
      'moment.min.js',
      'fullcalendar.min.js',
      'jquery.rateit.min.js',
      'jquery.prettyPhoto.js',
      'jquery.slimscroll.min.js',
      'jquery.dataTables.min.js',
      'excanvas.min.js',
      'jquery.flot.js',
      'jquery.flot.resize.js',
      'jquery.flot.pie.js',
      'jquery.flot.stack.js',
      'jquery.noty.js',
      'sparklines.js',
      'jquery.cleditor.min.js',
      'bootstrap-datetimepicker.min.js',
      'jquery.onoff.min.js',
      'filter.js',
      'custom.js',
      'charts.js',
      'html5shiv.js',
      'respond.min.js',
     ],'public/js/all.js');


    
     mix.version(['css/all.css','js/all.js']);
    
     mix.copy('resources/assets/fonts','public/build/fonts');
     mix.copy('resources/assets/img','public/build/img ');
});
