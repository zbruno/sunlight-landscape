// ## Globals
var autoprefix = require('gulp-autoprefixer');
var browserSync  = require('browser-sync');
var concat       = require('gulp-concat');
var gulp         = require('gulp');
var gutil        = require('gulp-util');
var notify       = require('gulp-notify');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var uglify       = require('gulp-uglify');

var sassDir     = './assets/styles/**/';
var cssDir      = './dist/styles/';

var jsDir       = './assets/scripts/**/*.js';
var jsDistDir   = './dist/scripts/';

var reload = browserSync.reload;

gulp.task('browser-sync', function() {
  browserSync({
    proxy: "http://localhost:8888/",
    tunnel: false,
    open: false
  });
});

gulp.task('compile-css', function() {
  return gulp.src(sassDir)
    .pipe(sourcemaps.init())
      .pipe(sass().on('error', sass.logError))
      .pipe(autoprefix('last 10 version'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(cssDir))
    .pipe(reload({
        stream: true
    }))
    .pipe(notify('Sass compiled.'));
});

gulp.task('compile-js', function() {
  return gulp.src(jsDir)
    .pipe(sourcemaps.init())
      .pipe(concat('scripts.js'))
      .pipe(uglify().on('error', gutil.log))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(jsDistDir))
    .pipe(notify('Static JS compiled.'));
});

gulp.task('bs-reload', function() {
  browserSync.reload();
});

gulp.task('watch', ['browser-sync', 'compile-css', 'compile-js'], function() {
    gulp.watch(sassDir + '**/*.scss', ['compile-css']);
    gulp.watch(jsDir + '*.js', ['compile-js', 'bs-reload']);
});
