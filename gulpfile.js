var gulp = require('gulp');

// CSS plugins
var gutil = require('gulp-util');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');

// image plugins
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');

// JavaScript plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

// connect-php
var connect = require('gulp-connect-php');

// browserSync plugin
var browserSync = require('browser-sync');


// TASKS

gulp.task('browser-sync', function() {
	connect.server({}, function(){
		browserSync.init({
			proxy: '127.0.0.1:8000'
		});
	});
});

gulp.task('styles', function(){
  gulp.src(['src/styles/**/*.scss'])
    .pipe(sass())
    .on('error', gutil.log)
    .pipe(autoprefixer('last 2 versions'))
    .on('error', gutil.log)
    .pipe(gulp.dest('dist/styles/'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('dist/styles/'))
    //.pipe(browserSync.reload({stream:true}))
});

gulp.task('images', function(){
  gulp.src('src/images/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest('dist/images/'));
});

gulp.task('scripts', function(){
  return gulp.src('src/scripts/**/*.js')
    .pipe(concat('main.js'))
    .on('error', gutil.log)
    .pipe(gulp.dest('dist/scripts/'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .on('error', gutil.log)
    .pipe(gulp.dest('dist/scripts/'))
    //.pipe(browserSync.reload({stream:true}))
});

gulp.task('bs-reload', function () {
  browserSync.reload();
});

gulp.task('default', ['browser-sync'], function () {
  gulp.watch("src/styles/**/*.scss", ['styles']);
  gulp.watch("src/scripts/**/*.js", ['scripts']);
  gulp.watch(["*.php", "dist/**"], ['bs-reload']);
});