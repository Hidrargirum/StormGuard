/**
 * Created by Trexer on 07.07.2018.
 */

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cleanCss = require('gulp-clean-css'),
    del = require('del');
gulp.task('scss', function () {
    console.log(' -------- Process scss files to css -- ( . Y . ) -------');
    return gulp.src('development/scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('development/css/'))
});

gulp.task('watch', ['scss'], function () {
    gulp.watch('development/scss/*.scss', ['css']);
});

gulp.task('clean', function () {
    console.log('---------- Delete style.css ------------');
    return del.sync(['style.css']);
});

gulp.task('css', ['scss', 'clean'], function () {
    console.log(' ---------- Bundling, minifying, and copying the app\'s CSS -----------------');
    return gulp.src('development/css/style.css')
        .pipe(cleanCss({}))
        .pipe(gulp.dest('./'));
});