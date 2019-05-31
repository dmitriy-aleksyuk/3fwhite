(() => {

	'use strict';

	/*--- Gulp.js 4 configuration ---*/

	// development or production
	let devBuild  = ((process.env.NODE_ENV || 'development').trim().toLowerCase() === 'development'),
			isModules = Boolean(process.env.ES_MODULES);

	const

		// directory locations
		dir = {
			src         : 'assets/',
			build       : 'build/',
			root        : './'
		},

		// modules
		gulp          = require('gulp'),
		del           = require('del'),
		notify        = require('gulp-notify'),
		merge         = require('merge-stream'),
		ttf2eot       = require('gulp-ttf2eot'),
		ttf2woff      = require('gulp-ttf2woff'),
		ttf2woff2     = require('gulp-ttf2woff2'),
		ttf2svg       = require('gulp-ttf-svg'),
		iconfont      = require('gulp-iconfont'),
		iconfontCss   = require('gulp-iconfont-css'),
		newer         = require('gulp-newer'),
		size          = require('gulp-size'),
		fileInclude   = require('gulp-file-include'),
		dom           = require('gulp-change'),
		rename        = require('gulp-rename'),
		imagemin      = require('gulp-imagemin'),
		sass          = require('gulp-sass'),
		postcss       = require('gulp-postcss'),
		uglify        = require('gulp-uglify'),
		minify        = require('gulp-minify'),
		babel         = require('gulp-babel'),
		concat        = require('gulp-concat'),
		gulpif        = require('gulp-if'),

		webpackStream = require('webpack-stream'),

		sourcemaps    = require('gulp-sourcemaps'),
		browsersync   = require('browser-sync').create();


	console.log('Gulp', devBuild ? 'development' : 'production', 'build');
	console.log('Gulp', isModules ? 'with ES6 modules' : 'without ES6 modules', 'build');


	/*--- clean task ---*/

	let clean = () => del([ dir.build ]);
	exports.clean = clean;




	/*---
		IMAGES task
	---*/
	const imgConfig = {
		src           : dir.src + 'images/**/*',
		build         : dir.build + 'images/',

		minOpts: {
			optimizationLevel: 5
		}
	};

	const images = () => gulp.src(imgConfig.src)
	.pipe(newer(imgConfig.build))
	.pipe(imagemin(imgConfig.minOpts))
	.pipe(size({ showFiles:true }))
	.pipe(gulp.dest(imgConfig.build));

	exports.images = images;




	/*---
	FONT task
	---*/
	const fontConfig = {
		main          : {
			src           : dir.src + 'fonts/main/**/*.ttf',
			build         : dir.build + 'fonts/main/',
			watch         : dir.src + 'fonts/main/**/*',
		},
		icons         : {
			src           : dir.src + 'images/icons/**/*.svg',
			fontName      : 'icons',
			build         : dir.build + 'fonts/icons/',
			watch         : dir.src + 'fonts/icons/**/*',
			runTimestamp  : Math.round( Date.now() / 1000 ),
		}
	};

	const mainFonts = (done) => {

		let self = gulp.src(fontConfig.main.src)
		.pipe(gulp.dest(fontConfig.main.build));

		let eot = gulp.src(fontConfig.main.src)
		.pipe(ttf2eot()).on('error', (err) => {
			notify().write(err);
			done();
		})
		.pipe(gulp.dest(fontConfig.main.build));

		let woff = gulp.src(fontConfig.main.src)
		.pipe(ttf2woff()).on('error', (err) => {
			notify().write(err);
			done();
		})
		.pipe(gulp.dest(fontConfig.main.build));

		let woff2 = gulp.src(fontConfig.main.src)
		.pipe(ttf2woff2()).on('error', (err) => {
			notify().write(err);
			done();
		})
		.pipe(gulp.dest(fontConfig.main.build));

		let svg = gulp.src(fontConfig.main.src)
		.pipe(ttf2svg()).on('error', (err) => {
			notify().write(err);
			done();
		})
		.pipe(gulp.dest(fontConfig.main.build));

		return merge(self, eot, woff, woff2, svg)
		.pipe(gulpif(!devBuild, browsersync.reload({ stream: true })))

	};

	exports.mainFonts = mainFonts;

	const iconFonts = (done) => {

		return gulp.src(['assets/images/icons/*.svg'], {base: 'assets'})
			.pipe(iconfontCss({
				path          : dir.src + 'scss/fonts/icons/templates/_icons.scss',
				targetPath    : './../../../assets/scss/fonts/icons/_icons.scss',
				fontPath      : '../fonts/icons/',
				fontName      : fontConfig.icons.fontName,
				timeStamp     : fontConfig.icons.runTimestamp
			})).on('error', (err) => {
				notify().write(err);
				done();
			})
			.pipe(iconfont({
				fontName      : fontConfig.icons.fontName,
				timeStamp     : fontConfig.icons.runTimestamp,
				formats       : [ 'svg', 'ttf', 'eot', 'woff', 'woff2' ],
				normalize     : true,
				fontHeight    : 1001
			}))
			.pipe(gulp.dest(fontConfig.icons.build))

	};

	exports.iconFonts = iconFonts;

	exports.fonts = gulp.series(iconFonts, mainFonts);




	/*---
	HTML task
	---*/
	const htmlConfig = {

		src         : dir.src + '*.html',
		watch       : dir.src + '**/*.html',
		build       : dir.build,
		htmlOpts: {
			dev: {
				style: 'main.css',
				js: 'main.js'
			},
			prod: {
				style: 'build.min.css',
				js: 'build.min.js'
			}
		},
		styleChanges: function(content) {
			return content.replace(new RegExp(htmlConfig.htmlOpts.dev.style), htmlConfig.htmlOpts.prod.style)
		},
		scriptChanges: function(content) {
			// console.log(content);
			return content.replace(new RegExp(htmlConfig.htmlOpts.dev.js), htmlConfig.htmlOpts.prod.js)
		}
	};

	const html = (done) => gulp.src(htmlConfig.src)
	.pipe(fileInclude({
		prefix: '@@',
		basepath: '@file'
	})).on('error', (err) => {
		notify().write(err);
		done(err);
	})
	.pipe(gulpif(!devBuild, dom(htmlConfig.styleChanges)))
	.pipe(gulpif(!devBuild, dom(htmlConfig.scriptChanges)))
	.pipe(gulp.dest(htmlConfig.build))
	.pipe(browsersync.reload({ stream: true }));

	exports.html = html;




	/*---
	CSS task
	---*/
	const cssConfig = {

		src         : dir.src + 'scss/main.scss',
		watch       : dir.src + 'scss/**/*',
		build       : dir.build + 'css/',
		sassOpts: {
			sourceMap       : devBuild,
			outputStyle     : 'nested',
			imagePath       : '/images/',
			precision       : 3,
			errLogToConsole : false
		},

		postCSS: [
			require('postcss-assets')({
				loadPaths: ['images/'],
				basePath: dir.build
			}),
			require('autoprefixer')({
				browsers: ['> 1%']
			}),
			require('css-mqpacker')()
		]

	};

	// remove unused selectors and minify production CSS
	if (!devBuild) {
		cssConfig.postCSS.push(
			// require('usedcss')({ html: ['./build/index.html'] }),
			require('cssnano')
		);

	}

	const css = (done) => gulp.src(cssConfig.src)
	.pipe(sourcemaps.init())
	.pipe(sass(cssConfig.sassOpts).on('error', (err) => {
		notify().write(err);
		done();
	}))
	.pipe(postcss(cssConfig.postCSS))
	.pipe(size({ showFiles:true }))
	.pipe(gulpif(!devBuild, rename({
		basename: "build",
		suffix: '.min'
	})))
	.pipe(sourcemaps.write('./'))
	.pipe(gulp.dest(cssConfig.build))
	.pipe(browsersync.reload({ stream: true }));

	exports.css = css;




	/*---
	JS task
	---*/
	const jsConfig = {
		src         : {
			entryPoint  : dir.src + 'js/main/main.js',
			allPart     : dir.src + 'js/main/**/*.js',
			allVendor   : dir.src + 'js/vendor/**/*.js',
		},
		watch       : dir.src + 'js/main/**/*.js',
		build       : {
			custom_js : dir.build + 'js/',
			vendor_js : dir.build + 'js/vendor/'
		}
	};

	const custom_js = (done) => {

		if(isModules) {
			return gulp.src(jsConfig.src.entryPoint)
			.pipe(webpackStream({
				output: {
					filename: 'main.js',
				},
				mode: 'development',
				module: {
					rules: [
						{
							test: /\.(js)$/,
							exclude: /(node_modules)/,
							loader: 'babel-loader',
							query: {
								presets: ['@babel/preset-env']
							}
						}
					]
				}
			})).on('error', (err) => {
				notify().write(err);
				done();
			})
			.pipe(sourcemaps.init())
			.pipe(gulpif(!devBuild, uglify()))
			.pipe(gulpif(!devBuild, minify()))
			.pipe(gulpif(!devBuild, rename({
				basename: "build",
				suffix: '.min'
			})))
			.pipe(sourcemaps.write('./'))
			.pipe(gulp.dest(jsConfig.build.custom_js))
			.pipe(browsersync.reload({ stream: true }))
		} else {
			return gulp.src(jsConfig.src.allPart)
			.pipe(sourcemaps.init())
			.pipe(concat('main.js'))
			.pipe(babel({
				presets: ['@babel/env']
			})).on('error', (err) => {
				notify().write(err);
				done();
			})
			.pipe(gulpif(!devBuild, uglify()))
			.pipe(gulpif(!devBuild, minify()))
			.pipe(gulpif(!devBuild, rename({
				basename: "build",
				suffix: '.min'
			})))
			.pipe(sourcemaps.write('./'))
			.pipe(gulp.dest(jsConfig.build.custom_js))
			.pipe(browsersync.reload({ stream: true }))
		}

	};

	const vendor_js = () => gulp.src(jsConfig.src.allVendor)
	// .pipe(babel({
	// 	presets: ['@babel/env']
	// }))
	.pipe(gulp.dest(jsConfig.build.vendor_js))
	.pipe(browsersync.reload({ stream: true }));

	if(!isModules) {
		exports.js = gulp.series(vendor_js, custom_js);
	} else {
		exports.js = custom_js;
	}



	/*---
	SERVER task
	---*/
	const syncConfig = {
		server: {
			baseDir   : './build',
			index     : 'index.html'
		},
		port        : 8000,
		open        : true
	};

	// browser-sync
	const server = (done) => {
		if (browsersync) browsersync.init(syncConfig);
		done();
	};




	/*---
	WATCH task
	---*/
	const watch = (done) => {

		// image changes
		gulp.watch(imgConfig.src, images);

		// CSS changes
		gulp.watch(cssConfig.watch, css);

		// Vendor JS changes
		gulp.watch(jsConfig.watch, custom_js);

		// HTML changes
		gulp.watch(htmlConfig.watch, html);

		// mainFonts changes
		gulp.watch(fontConfig.main.watch, mainFonts);

		// iconFonts changes
		gulp.watch(fontConfig.icons.watch, iconFonts);

		done();

	};




	/*---
	RUN tasks
	---*/
	// Development Task
	const dev = gulp.series(gulp.parallel(exports.js, exports.html, exports.css, exports.images, exports.fonts), watch, server);
	const prod = gulp.series(clean, gulp.parallel(exports.js, gulp.series(exports.html, exports.css), exports.images, exports.fonts));

	exports.default = dev;
	exports.prod = prod;

})();