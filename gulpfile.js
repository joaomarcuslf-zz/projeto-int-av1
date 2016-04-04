var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var cleanCSS = require('gulp-clean-css');

gulp.task('default', function() {
	console.log("Watching:");
});

gulp.task('sass', function () {
  return sass('sass/style.scss')
    .on('error', sass.logError)
    .pipe(gulp.dest('css/'))
    .pipe(cleanCSS({compatibility: 'ie8'}));
});

gulp.task('sass:watch', function () {
  gulp.watch('sass/**/*.scss',['sass']);
});

