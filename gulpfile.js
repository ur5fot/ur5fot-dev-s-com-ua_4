var gulp = require('gulp');

var livereload = require('gulp-livereload');
var sass = require('gulp-sass');

 
gulp.task('sass', function () {
  gulp.src('wp-content/themes/leding3/scss/**/*')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('wp-content/themes/leding3/css/'))
    .pipe(livereload());
});
 
gulp.task('sass:watch', function () {
  gulp.watch('wp-content/themes/leding3/scss/**/*', ['sass']);
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('wp-content/themes/leding3/scss/**/*', ['sass']);
  gulp.watch('index.php');
});

gulp.task('default',['sass','watch']);

