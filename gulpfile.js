var gulp = require('gulp');
var pug = require('gulp-pug');
var sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

gulp.task('pug', function(){
    return gulp.src('src/pug/*.pug')
        .pipe(pug())
        .pipe(gulp.dest('dist/html/'))
});

gulp.task('sass', function(){
    return gulp.src('src/sass/*.sass')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist/css/'))
});

gulp.task('watch', function() {
    gulp.watch('src/pug/**/*.pug', ['pug']);
    gulp.watch('src/sass/**/*.sass', ['sass']);
});

gulp.task('default', [ 'watch', 'pug', 'sass' ]);