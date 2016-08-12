/* jshint node: true */

'use strict';

var clean		= require('gulp-clean'),
	jsConcat	= require('gulp-concat'),
	jshint		= require('gulp-jshint'),
	jsUglify	= require('gulp-uglify'),
	gulp		= require('gulp'),
	modernizr	= require('gulp-modernizr'),
	neat		= require('node-neat'),
	normalize	= require('node-normalize-scss'),
	plumber		= require('gulp-plumber'),
	rename		= require('gulp-rename'),
	safeMkdir	= require('safe-mkdir').mkdirSync,
	sass		= require('gulp-sass'),
	sourcemap	= require('gulp-sourcemaps'),
	stylish		= require('jshint-stylish'),
	paths		= {
	    sass: neat.with(normalize.includePaths)
	},
	assetsDistPath		= './assets/app/dist/',
	assetsDistPathCss	= assetsDistPath+'css/',
	assetsDistPathJs	= assetsDistPath+'js/',
	assetsSrcPath		= './assets/app/src/',
	assetsSrcPathScss	= assetsSrcPath+'scss/',
	assetsSrcPathJs		= assetsSrcPath+'js/';


gulp.task('sass', function() {
    safeMkdir(assetsDistPathCss);
    gulp.src(assetsSrcPathScss+'**/*.scss')
        .pipe(sourcemap.init())
        .pipe(plumber())
        .pipe(sass({
            includePaths: paths.sass
        }).on('error', sass.logError))
        .pipe(sourcemap.write())
        .pipe(gulp.dest(assetsDistPathCss));
});

gulp.task('sass-minify', function() {
    safeMkdir(assetsDistPathCss);
	gulp.src(assetsSrcPathScss+'**/*.scss')
        .pipe(plumber())
        .pipe(sass({
            includePaths: paths.sass,
			outputStyle: 'compressed'
        }).on('error', sass.logError))
		.pipe(rename(function (path) {
			path.extname = '.min.css';
		}))
        .pipe(gulp.dest(assetsDistPathCss));
});

gulp.task('watch', function() {
    gulp.watch(assetsSrcPathScss+'**/*.scss', ['sass', 'sass-minify']);
	gulp.watch([assetsSrcPathJs+'**/*.js'], ['build-js']);
});

gulp.task('build-modernizr', function() {
    safeMkdir(assetsDistPathJs);
    gulp.src([assetsSrcPathJs+'**/*.js'])
        .pipe(modernizr({"options" : [
	        "setClasses",
	        "addTest",
	        "html5printshiv",
	        "testProp",
	        "fnBind",
	        "mq"
	    ]}))
		.pipe(jsUglify())
        .pipe(gulp.dest(assetsDistPathJs));
});

gulp.task('jslint', function() {
    gulp.src([assetsSrcPathJs+'active-modules/*.js'])
        .pipe(plumber())
        .pipe(jshint())
        .pipe(jshint.reporter(stylish))
        .pipe(jshint.reporter('fail')).on('error', function() {});
});

gulp.task('concat-uglify-js', function() {
    safeMkdir(assetsDistPathJs);
    gulp.src([assetsSrcPathJs+'vendor/*.js', assetsSrcPathJs+'active-modules/*.js'])
        .pipe(sourcemap.init())
        .pipe(jsConcat('main.js'))
        .pipe(sourcemap.write())
        .pipe(gulp.dest(assetsDistPathJs))
		.pipe(rename('main.min.js'))
		.pipe(jsUglify())
		.pipe(gulp.dest(assetsDistPathJs));
});


gulp.task('clean:js', function() {
    gulp.src(assetsDistPathJs, {read:false})
        .pipe(clean());
});

gulp.task('clean:css', function() {
    gulp.src(assetsDistPathCss, {read:false})
        .pipe(clean());
});

gulp.task('clean', ['clean:css', 'clean:js']);

gulp.task('build-js', ['jslint', 'build-modernizr', 'concat-uglify-js']);

gulp.task('default', ['clean', 'sass', 'sass-minify', 'build-js', 'watch']);
