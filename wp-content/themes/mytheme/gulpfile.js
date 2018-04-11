var gulp = require('gulp'),
    browserSync = require('browser-sync').create(),
    sass = require('gulp-sass');
    concat = require('gulp-concat');
    connect = require('gulp-connect-php');
    uglify = require('gulp-uglify');
    browserify= require('browserify');

gulp.task('sass', function() {
    return gulp.src("./source/sass/*.scss")
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest("./gulp-file")) 
        .pipe(browserSync.stream());
});

gulp.task('js', function(){
   gulp.src([
    './source/js/*.js'
    // '../../../node_modules/jquery/*.js'
    ])
   .pipe(concat('script.js'))
   .pipe(uglify())
   .pipe(gulp.dest('./gulp-file/')); 
});
gulp.task('js-watch', ['js'], function (done) {
    browserSync.reload();
     done();
});

    gulp.task('serve', ['sass','js'], function() {
    
    browserSync.init({
        proxy: 'seafood.me' 
    });

    gulp.watch("./source/sass/main.scss", ['sass']);
    gulp.watch("./source/js/*.js", ['js-watch']); 
    gulp.watch("./**/*.php").on('change', browserSync.reload); 
});
   
   

gulp.task('default', ['serve']);