const gulp = require('gulp');
const sass = require('gulp-sass');

const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

//Compile Sass
gulp.task('sass', function(){
    gulp.src('./assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./style.css'))
});

//Compile JavaScript

gulp.task('plugin-scripts', function() {
    gulp.src(['./assets/js/plugins/jquery.min.js', './assets/js/plugins/masonry.min.js'])
    .pipe(concat('script.js'))
    .pipe(rename('plugins.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'));
});

gulp.task('custom-scripts', function() {
    gulp.src('./assets/js/custom/*.js')
        .pipe(rename('custom.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'));
});

gulp.task('compile-scripts', ['plugin-scripts', 'custom-scripts'],function() {
    gulp.src(['./assets/js/plugins.min.js','./assets/js/custom.min.js'])
        .pipe(concat('script.js'))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'));
});
//Watches 
gulp.task('watch', function(){
    gulp.watch('./assets/sass/*.scss', ['sass']);
   
})