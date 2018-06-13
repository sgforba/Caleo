const gulp = require('gulp');
const sass = require('gulp-sass');

//Compile Sass
gulp.task('sass', function(){
    gulp.src('./assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'))
});

//Watches Sass
gulp.task('watch', function(){
    gulp.watch('./assets/sass/*.scss', ['sass']);
})