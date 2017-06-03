var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var plumber = require('gulp-plumber');


// //////////////////////////////////////////////
// Sass to css
// /////////////////////////////////////////////
gulp.task('sass', function () {
    return gulp.src('sass/**/*.{scss,sass}')
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css'));
});


// ///////////////////////////////////////////////////
// Watch Task
// ///////////////////////////////////////////////////
gulp.task('watch', function(){
    gulp.watch('sass/**/*.{scss,sass}', ['sass']);
});

// ///////////////////////////////////////////////////
// Default Task
// ///////////////////////////////////////////////////
gulp.task('default' , ['sass', 'watch']);