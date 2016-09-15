'use strict';

/**
 * @function `gulp copy`
 * @desc Copy theme files to corresponding WordPress directory.
 */

var gulp = require('gulp');

var taskName = 'copy',
	taskConfig = {
		src: [
			'./build/assets/**/*',
			'./build/data/**/*',
			'./source/assets/media/fav/**/*',
			'./source/{layouts,pages/**,modules/**}/*.twig'
		],
		dest: './../kirby/',
		watch: [
			'./build/assets/**/*',
			'./source/{layouts,pages/**,modules/**}/*.twig'
		]
	};

gulp.task(taskName, ['html'], function() {
	var changed = require('gulp-changed'),
		rename = require('gulp-rename');

	return gulp.src(taskConfig.src, {
			base: './'
		})
		.pipe(changed(taskConfig.dest))
		.pipe(rename(function(path) {
			path.dirname = path.dirname
				.replace('build/', '')
				.replace('source/', 'site/templates/')
				.replace(/pages\/\w+\/?/, '');
		}))
		.pipe(gulp.dest(taskConfig.dest));
});

module.exports = {
	taskName: taskName,
	taskConfig: taskConfig
};
