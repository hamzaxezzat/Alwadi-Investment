//gulp plugins
var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
// header provides $switcher variable to scss to add or remove switcher styles (demo and production versions)
var header      = require('gulp-header');
var sass        = require('gulp-sass');
var sourcemaps  = require('gulp-sourcemaps');
//postCss
var postcss     = require('gulp-postcss');
var autoprefixer= require('autoprefixer');
var flexbugs    = require('postcss-flexbugs-fixes');
var stylefmt    = require('stylefmt');

// Compile sass for production - no swithcer styles, no sourcemaps
gulp.task('sass', function() {
	return gulp.src("./scss/**/*.scss")
		.pipe(sourcemaps.init())
		.pipe(header('$switcher: false;\n'))
		.pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
		.pipe(postcss([ autoprefixer({
			"overrideBrowserslist.": [
				"> 0.5%"
			]
		}), flexbugs(), stylefmt(
			{
				// "extends": "stylelint-config-suitcss",
				"rules": {
					"block-closing-brace-newline-after":"always-single-line",
					"block-closing-brace-space-after":"never",
					"block-opening-brace-space-before":"never",
					"length-zero-no-unit":true,
					"indentation": "tab",
					"number-leading-zero": null
				}
			}
		)]))
		.pipe(sourcemaps.write('./css/maps'))
		.pipe(gulp.dest("./css"))
		.pipe(browserSync.stream({match: '**/*.css'}));
});


// Compile sass for production - no swithcer styles, no sourcemaps
gulp.task('sassBootstrap', function() {
	return gulp.src("./scss_bootstrap/**/*.scss")
		.pipe(sourcemaps.init())
		.pipe(header('$switcher: false;\n'))
		.pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
		.pipe(postcss([ autoprefixer({
			"overrideBrowserslist.": [
				"> 0.5%"
			]
		}), flexbugs(), stylefmt(
			{
				// "extends": "stylelint-config-suitcss",
				"rules": {
					"block-closing-brace-newline-after":"always-single-line",
					"block-closing-brace-space-after":"never",
					"block-opening-brace-space-before":"never",
					"length-zero-no-unit":true,
					"indentation": "tab",
					"number-leading-zero": null
				}
			}
		)]))
		.pipe(sourcemaps.write('./css/maps'))
		.pipe(gulp.dest("./css"))
		.pipe(browserSync.stream({match: '**/*.css'}));
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', 'sassBootstrap', function() {

	browserSync.init({
		server: {
			baseDir: "./"
		}
	});

	gulp.watch("./scss/**/*.scss", gulp.parallel('sass'));
	gulp.watch("./scss_bootstrap/**/*.scss", gulp.parallel('sassBootstrap'));

	//js and HTML files to reload on save
	gulp.watch([
		"./*.html",
		"js/*.js",
	]).on('change', browserSync.reload);
}));

gulp.task('default', gulp.series('serve'));
