var gulp = require('gulp');
var pug = require('gulp-pug');
var sass = require('gulp-sass');

gulp.task('pug', function(){
    return gulp.src('templates/*.pug')
        .pipe(pug())
        .pipe(gulp.dest('build/html'))
});

gulp.task('sass', function(){
    return gulp.src('main.sass')
        .pipe(sass())
        .pipe(gulp.dest('build'))
});

gulp.task('watch', function() {
    gulp.watch('templates/**/*.pug', ['pug']);
    gulp.watch('main.sass', ['sass']);
});

gulp.task('default', [ 'watch', 'pug', 'sass' ]);