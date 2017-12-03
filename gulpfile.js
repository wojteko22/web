var gulp = require('gulp')
var pug = require('gulp-pug')
var rename = require('gulp-rename')
var sass = require('gulp-sass')
var htmlbeautify = require('gulp-html-beautify')
const autoprefixer = require('gulp-autoprefixer')

gulp.task('pug', function () {
  return gulp.src('src/pug/*.pug')
    .pipe(pug())
    .pipe(htmlbeautify())
    .pipe(gulp.dest('dist/html/'))
})

gulp.task('pug-php', function () {
  return gulp.src('src/pug/php/*.pug')
    .pipe(pug())
    .pipe(htmlbeautify())
    .pipe(rename({
      extname: '.php'
    }))
    .pipe(gulp.dest('dist/html/'))
})

gulp.task('sass', function () {
  return gulp.src('src/sass/*.sass')
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('dist/css/'))
})

gulp.task('watch', function () {
  gulp.watch('src/pug/**/*.pug', ['pug'])
  gulp.watch('src/pug/php/*.pug', ['pug-php'])
  gulp.watch('src/sass/**/*.sass', ['sass'])
})

gulp.task('default', ['watch', 'pug', 'pug-php', 'sass'])
