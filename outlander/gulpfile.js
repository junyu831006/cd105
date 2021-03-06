var gulp = require('gulp');
// var cssUrls = require('gulp-css-urls');
var sass = require('gulp-sass');
// var gsap = require('gsap');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;



// gulp.task('cssUrls', function () {
//     return gulp.src('./src/*.css')
//         .pipe(cssUrls({
//             prepend: 'http://cd105.com',
//             append: '?version=3',
//         }))
//         .pipe(gulp.dest('./dist/'));
// });

// sass 編譯函式
gulp.task('sass', function () {
    return gulp.src('./sass/*.scss') //來源目錄
        .pipe(sass().on('error', sass.logError)) //經由sass 轉譯
        .pipe(gulp.dest('./css')); //目的地目錄
});



gulp.task('default', ['sass'], function () {

    browserSync.init({
        server: {
            //根目錄
            baseDir: "./",
            index: "scrollMagic.html"
        }
    });

    gulp.watch(["sass/*.scss", "sass/**/*.scss"], ['sass']).on('change', reload);
    gulp.watch("*.html").on('change', reload);
    gulp.watch("js/*.js").on('change', reload);
    gulp.watch("images/*").on('change', reload);
    // gulp.watch("images/*").on('change', reload);
});


gulp.task('css', ['cssUrls']);