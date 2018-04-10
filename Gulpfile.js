var Autoprefixer  = require('gulp-autoprefixer');
var Clean         = require('gulp-clean');
var Gulp          = require('gulp');
var Gzip          = require('gulp-gzip');
var Sass          = require('gulp-sass');
var StripComments = require('gulp-strip-css-comments');

const PATHS = {
  stylesheets: [
    './src/stylesheets/fc.scss',
  ],
};

Gulp.task('default', ['build']);

Gulp.task('watch', ['build'], function () {
  Gulp.watch('./src/stylesheets/**/*.scss', ['build:css']);
});

Gulp.task('build', ['clean', 'build:css']);

Gulp.task('build:css', function () {
  Gulp.src(PATHS.stylesheets)
    .pipe(Sass({outputStyle: 'compressed'}).on('error', Sass.logError))
    .pipe(Autoprefixer())
    .pipe(StripComments({preserve: false}))
    .pipe(Gulp.dest('./public'))
    .pipe(Gzip())
    .pipe(Gulp.dest('./public'));
});

Gulp.task('clean', function () {
  Gulp.src(['./public/*.css', './public/*.gz'], {read: false})
    .pipe(Clean());
});
