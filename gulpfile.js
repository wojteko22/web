var gulp = require('gulp');
var pug = require('gulp-pug');

gulp.task('pug', function(){
    return gulp.src('templates/*.pug')
        .pipe(pug())
        .pipe(gulp.dest('build/html'))
});

gulp.task('watch', function() {
    gulp.watch('templates/**/*.pug', ['pug']);
});

gulp.task('default', [ 'watch', 'pug' ]);