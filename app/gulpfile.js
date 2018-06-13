const gulp = require('gulp');
const sass = require('gulp-sass');

//Compile Sass
gulp.task('sass', function(){
    gulp.src('./sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'))
});

//Watches Sass
gulp.task('watch', function(){
    gulp.watch('./sass/*.scss', ['sass']);
})