var gulp = require('gulp');
var pug = require('gulp-pug');

gulp.task('html', function(){
    return gulp.src('templates/*.pug')
        .pipe(pug())
        .pipe(gulp.dest('build/html'))
});

gulp.task('default', [ 'html' ]);