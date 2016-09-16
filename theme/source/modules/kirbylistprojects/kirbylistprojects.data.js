'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby List Projects',
			code: dataHelper.getTemplateCode('kirbylistprojects.twig'),
			documentation: dataHelper.getDocumentation('kirbylistprojects.md')
		}
	});

module.exports = data;
