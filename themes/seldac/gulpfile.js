 /**
  * @todo i18n for bootstrap-checkbox
  * @todo jquery compile problem with define
  */

var gulp = require('gulp');  
var concat = require('gulp-concat');
var filesize = require('gulp-filesize');
var uglify = require('gulp-uglify');
var less = require('gulp-less');
var gutil = require('gulp-util');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var notify = require('gulp-notify');
var browserify = require('gulp-browserify');
var resolveDependencies = require('gulp-resolve-dependencies');
var clean = require('gulp-clean');
var plumber = require('gulp-plumber');
var path = require('path');
var source_maps = require('gulp-sourcemaps');
var add_src = require('gulp-add-src');
var run = require('gulp-run');
var ext_replace = require('gulp-ext-replace');
var php2html = require("gulp-php2html");

var assets_directory = 'assets/';
var bower_directory = assets_directory + 'vendor/';

function show_notify(title, message)
{
	return notify( {
		'title': title,
		'message': message,
		onLast: true,
		icon: path.join(__dirname, assets_directory + 'images/gulp/icon-notify.png')
	} );
}

function manage_error()
{
	return plumber( { errorHandler: notify.onError(
		{
			title: 'Error',
			message: '<%= error.message %>',
			onLast: true,
			icon: path.join(__dirname, assets_directory + 'images/gulp/icon-error.png')
		} )
	} );
}

function run_javascript(src, output, title)
{
	return gulp.src(src + '.js')
		.pipe( manage_error() )
		.pipe( resolveDependencies( {
			pattern: /\* @requires [\s-]*(.*?\.js)/g
		} ) )
		.pipe( concat(output + '.js') )
		.pipe( uglify() )
		.pipe( gulp.dest(assets_directory + 'javascript') )
		.pipe( show_notify(title, 'JS compiled, concatenated and uglified') );
}

function run_less(src, output, title, include_paths)
{
	return gulp.src(src + '.less')
		.pipe( manage_error() )
//		.pipe( source_maps.init() )
		.pipe ( less( { 
			compress: true,
			paths: include_paths
		} ) )
//		.pipe(source_maps.write(assets_directory + 'css/maps') )
		.pipe( concat(output + '.css') )
		.pipe( autoprefixer('last 10 versions', 'ie 9') )
		.pipe( minifyCSS( { keepBreaks: false } ) )
		.pipe( gulp.dest(assets_directory + 'css') )
		.pipe( show_notify(title,  'LESS compiled, prefixed and minified') );
}

function run_clean(src, title, message)
{
	return gulp.src(src, { read: false } )
		.pipe( manage_error() )
		.pipe( clean( { force: true } ) )
		.pipe( show_notify(title, message + ' cleaned') );
}

function run_copy(src, dest, title, message)
{
	return gulp.src(src)
		.pipe( manage_error() )
		.pipe( gulp.dest(dest) )
		.pipe( show_notify(title, message + ' copied') );
}

gulp.task('bootstrap', function ()
{
	run_javascript('bootstrap/js/*', 'bootstrap', 'Bootstrap');
	run_javascript('bootstrap-checkbox/js/*', 'bootstrap-checkbox', 'Bootstrap-Checkbox');
	run_javascript('jasny-bootstrap/js/*', 'jasny-bootstrap', 'Jasny-Bootstrap');

	run_clean(bower_directory + 'bootstrap/less/variables.less', 'Bootstrap','LESS Variables');
	run_less( bower_directory + 'bootstrap/less/bootstrap', 'bootstrap', 'Bootstrap', [
		bower_directory + 'bootstrap/less',
		assets_directory + 'less/bootstrap'
	] );

	run_clean(bower_directory + 'jasny-bootstrap/less/variables.less', 'Bootstrap', 'Jasny Bootstrap LESS Variables');
	run_less( bower_directory +'jasny-bootstrap/less/jasny-bootstrap', 'jasny-bootstrap', 'Jasny Bootstrap', [
			bower_directory + 'bootstrap/less',
			bower_directory + 'jasny-bootstrap/less',
			assets_directory + 'less/jasny-bootstrap'
		]
	);

	run_copy(bower_directory + 'bootstrap/fonts/*', assets_directory + 'fonts/bootstrap', 'Bootstrap', 'Fonts');
});

gulp.task('font-awesome', function ()
{
	run_clean(bower_directory + 'fontawesome/less/variables.less', 'Font Awesome', 'LESS Variables');
	run_less( bower_directory + 'fontawesome/less/font-awesome', 'font-awesome', 'Font Awesome', [
		bower_directory + 'font-awesome/less',
		assets_directory + 'less/font-awesome'
	] );
	run_copy(bower_directory + 'fontawesome/fonts/*', assets_directory + 'fonts/font-awesome', 'Font Awesome', 'Fonts');
});

gulp.task('jquery', function ()
{
	return run_javascript(bower_directory + 'jquery/src/jquery', 'jquery', 'jQuery');
});

gulp.task('summernote', function ()
{
	return run_javascript(bower_directory + 'jquery/src/jquery', 'jquery', 'jQuery');
});

gulp.task('theme', function () 
{
	return run_less(assets_directory + 'less/theme', 'theme', 'Seldac Theme', [
		assets_directory + 'less'
	] );
});

gulp.task('clean', function ()
{
	run_clean(assets_directory + 'javascript', 'Seldac', 'JS');
	run_clean(assets_directory + 'css', 'Seldac', 'CSS');
	run_clean(assets_directory + 'fonts', 'Seldac', 'Fonts');
});