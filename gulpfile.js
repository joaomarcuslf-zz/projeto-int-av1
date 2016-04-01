var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var minifycss = require('gulp-minify-css');

gulp.task('default', function() {
	console.log("Watching:");
});
 
gulp.task('sass', function () {
  return sass('sass/*.scss')
    .on('error', sass.logError)
    .pipe(gulp.dest('css/')
    .pipe(minifycss()));
});

gulp.task('sass:watch', function () {
  gulp.watch('sass/**/*.scss',['sass']);
});