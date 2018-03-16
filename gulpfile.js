var gulp = require('gulp'),
    browserSync = require('browser-sync').create(),
    sass = require('gulp-sass');
     connect = require('gulp-connect-php');

    gulp.task('sass', function() {
    return gulp.src("./wp-content/themes/mytheme/source/sass/main.scss")
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest("./wp-content/themes/mytheme/gulp-file")) 
        .pipe(browserSync.stream());
    });








     gulp.task('js', function() {
    return gulp.src("./wp-content/themes/mytheme/source/js/main.js")
        .pipe(gulp.dest("./wp-content/themes/mytheme/gulp-file")) 
        .pipe(browserSync.stream());
    });










    gulp.task('serve', ['sass','js'], function() {
    
    browserSync.init({
        proxy: 'sml.dev' 
    });

    gulp.watch("./wp-content/themes/mytheme/source/sass/main.scss", ['sass']);
    gulp.watch("./**/*.php").on('change', browserSync.reload); 
    gulp.watch("./**/*.js").on('change', browserSync.reload);  
});
   
   

gulp.task('default', ['serve']); 