// var gulp = require('gulp'),
//     browserSync = require('browser-sync').create(),
//     sass = require('gulp-sass');
//     concat = require('gulp-concat');
//     connect = require('gulp-connect-php');
//     uglify = require('gulp-uglify');
//     browserify= require('browserify');

// gulp.task('sass', function() {
//     return gulp.src("./wp-content/themes/storefront/source/sass/*.scss")
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest("./wp-content/themes/storefront/gulp-file")) 
//         .pipe(browserSync.stream());
// });

// gulp.task('js', function(){ 
//    gulp.src([
//    	// './wp-content/themes/mytheme/source/js/*.js',
//    	'./node_modules/jquery/dist/*.js'

//    	])
//    .pipe(concat('script.js'))
//    .pipe(uglify())
//    .pipe(gulp.dest('./wp-content/themes/storefront/gulp-file/')); 
// });
// gulp.task('js-watch', ['js'], function (done) {
//     browserSync.reload();
//      done();
// });

//     gulp.task('serve', ['sass','js'], function() {
    
//     browserSync.init({
//         proxy: 'seafood.me' 
//     });

//     gulp.watch("./wp-content/themes/storefront/source/sass/main.scss", ['sass']);
//     gulp.watch("./wp-content/themes/storefront/source/js/*.js", ['js-watch']); 
//     gulp.watch("./**/*.php").on('change', browserSync.reload); 
// });
   
   

// gulp.task('default', ['serve']); 
