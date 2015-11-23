var gulp = require('gulp');
var stylus = require('gulp-stylus');
var nib = require('nib');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var clean = require('gulp-clean');
var minifyCss = require('gulp-minify-css');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;


//Compiling Stylus files
gulp.task('concat_css', function () {
    return gulp.src('resources/assets/css//*.css')
        .pipe(concat('application.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('public/css/'));
});

//Iframe styke
gulp.task('concat_iframe', function () {
    return gulp.src('resources/assets/iframe//*.css')
        .pipe(concat('iframe.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('public/css/'));
});

// Clean
gulp.task('clean', function () {
    return gulp.src(['public/css', 'public/js', 'public/img'], {read: false})
        .pipe(clean());
});

//Concatenation of module scripts in app.js file
gulp.task('concat_scripts', function () {
    return gulp.src('resources/assets/js//*.js')
    .pipe(uglify())
    .pipe(gulp.dest('public/js/'));
});


//Server, Watcher, Reloader
gulp.task('serve', function () {
    browserSync.init({
        //server: "http://localhost:8000",
        proxy: "localhost:8000"
    });
    gulp.watch("resources/assets/stylus/**/*", ['stylus']).on('change', reload);
    gulp.watch("resources/assets/js/**/*", ['concat_scripts']).on('change', reload);
    gulp.watch("resources/views/**/*.blade.php").on('change', reload);
    gulp.watch("resources/assets/img/**/*").on('change', reload);
});


// Copy img directory
gulp.task('copy_img', function () {
    gulp.src('resources/assets/img/**')
    .pipe(gulp.dest('public/img'));
});


// Gulp tasks to run
gulp.task('develop', ['concat_css', 'concat_scripts', 'concat_iframe', 'copy_img']);
gulp.task('build', ['copy']);
gulp.task('watch', ['serve']);
