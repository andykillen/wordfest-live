const {src, task, dest, watch, series} = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var minifyCSS = require('gulp-csso');
var uglify = require('gulp-uglify');
var rename = require("gulp-rename");

function errorHandler (error) {
  console.log(error.toString())
  this.emit('end')
}

function js(){
  return src('assets/**/*.js')
    .pipe(dest('./'))
    .pipe(uglify()).on('error', errorHandler)
      .pipe(rename({ extname: '.min.js' }))
    .pipe(dest('./'))
    .pipe(sourcemaps.init())
      .pipe(uglify()).on('error', errorHandler)
      .pipe(rename({ extname: '.sourcemap.js' }))
    .pipe(sourcemaps.write())
    .pipe(dest('./'))
    ;
};


task('default', series(js));

task('watch', function(){
  watch('assets/**/*.js', series(js));
});

