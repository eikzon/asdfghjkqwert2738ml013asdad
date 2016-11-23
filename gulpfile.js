var gulp        = require('gulp');
var coffee      = require('gulp-coffee');
var include     = require('gulp-include');
var pump        = require('pump');

var elixir      = require('laravel-elixir');

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

gulp.task("include-coffee", function(cb) {
  pump([
    gulp.src([
      'resources/assets/coffee/account.coffee',
    ]),
    include(),
    coffee(),
    gulp.dest("public/js")
    ],
    cb
  );
});

gulp.task("include-js", function(cb) {
  pump([
    gulp.src([
      'resources/assets/js/all-sitecontrol.js'
    ]),
    include(),
    gulp.dest("public/js")
    ],
    cb
  );
});

elixir(function(mix) {
  mix
    .sass('sitecontrol.scss')
    .task('include-coffee')
    .task('include-js');
});


