'use strict';

var util = require('gulp-util'),
	data = {
		project: 'PIU',
		env: util.env,
		globals: {
			env: util.env,
			gulp: true,
			project: {
				title: 'PIU'
			}
		},

	};

module.exports = data;
