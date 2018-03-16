// var gulp = require('gulp'),
//     browserSync = require('browser-sync').create(),
//     sass = require('gulp-sass');
//      connect = require('gulp-connect-php');

//     gulp.task('sass', function() {
//     return gulp.src("source/scss/*.scss")
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest("./gulp-file"))
//         .pipe(browserSync.stream());
// 	});

//     //gulp.task('php', function(){
//  //    gulp.src('./**/*.php')
//  //        .pipe(connect.reload());
// 	// });

//     gulp.task('serve', ['sass'], function() {
    
//      browserSync.init({
//         proxy: './' 
//     });

//      //////
//      gulp.task('connect-sync', function() {
//   		connect.server({}, function (){
//    		browserSync({
//      	proxy: './'
//        });
//     });

//     gulp.watch('**/*.php').on('change', function () {
//       		browserSync.reload();
//     });
// 	});

//      ////

//     gulp.watch("./source/sass/*.scss", ['sass']); 
   
//     gulp.watch("./**/*.php").on('change', browserSync.reload);
  
     
// }); 

// gulp.task('default', ['serve']);  