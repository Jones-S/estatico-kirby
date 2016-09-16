'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Projects',
			code: dataHelper.getTemplateCode('kirbyprojects.twig'),
			documentation: dataHelper.getDocumentation('kirbyprojects.md')
		}
	});

module.exports = data;
