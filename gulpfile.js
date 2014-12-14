 /**
  * @todo i18n for bootstrap-checkbox
  * @todo sourcemap error when write
  * @todo jquery compile problem with define
  * @todo gulp dep in npm
  */

var axc_gulp = require('axc-gulp');
var __join = axc_gulp.plugin.path.join;

var assets_directory = 'assets';
var bower_directory = 'vendor';

function __bower(path) { return __join(bower_directory, path); }
function __assets(path) { return __join(assets_directory, path); }

axc_gulp.config.set({
	title: 'Seldac Theme',
	path: __join(__dirname, assets_directory),
	icon_notify: __join(__dirname, assets_directory, 'images/gulp/icon/notify.png')
});

axc_gulp.task
	.clean({ taskName: 'bootstrap-clean', src: __bower('bootstrap/less/variables.less') })
	.copy({ taskName: 'bootstrap-font-copy', src: __bower('bootstrap/fonts/**/*.{ttf,woff,eot,svg}'), dest: 'fonts/bootstrap' })
	.less2css({ taskName: 'bootstrap', src: __bower('bootstrap/less/bootstrap.less'), dependences: ['bootstrap-clean', 'bootstrap-font-copy'],
		paths: [ __assets('less/bootstrap') ], dest: 'dist' })

	.clean({ taskName: 'jasny-bootstrap-clean', src: __bower('jasny-bootstrap/less/variables.less') })
	.less2css({ taskName: 'jasny-bootstrap', src: __bower('jasny-bootstrap/less/jasny-bootstrap.less'), dependences: ['jasny-bootstrap-clean'],
		paths: [ __bower('bootstrap/less'), __assets('less/jasny-bootstrap') ], dest: 'dist' })

	.js2dist({ taskName: 'theme-js', src: 'js/theme.js' })
	.less2css({ taskName: 'theme-less', src: 'less/theme.less', paths: [ __bower('bootstrap/less'), assets_directory ], dest: 'dist' })
	.run({ 'taskName': 'theme', dependences: ['theme-js', 'theme-less'] })

	.clean({ src: ['dist/**', 'css/**', 'fonts/**'] })

	.default(['bootstrap', 'jasny-bootstrap', 'theme']);