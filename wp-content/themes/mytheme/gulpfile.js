var gulp = require('gulp'),
    browserSync = require('browser-sync').create(),
    sass = require('gulp-sass');

    gulp.task('sass', function() {
    return gulp.src("source/scss/*.scss")
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest("./gulp-file"))
        .pipe(browserSync.stream());
});

    gulp.task('serve', ['sass'], function() {
    
    browserSync.init({
        server: "./"
    });

    gulp.watch("./source/sass/main.scss", ['sass']);
    gulp.watch("./*.html").on('change', browserSync.reload); 
}); 

gulp.task('default', ['serve']); 