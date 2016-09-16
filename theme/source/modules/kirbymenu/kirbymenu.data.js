'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Menu',
			code: dataHelper.getTemplateCode('kirbymenu.twig'),
			documentation: dataHelper.getDocumentation('kirbymenu.md')
		}
	});

module.exports = data;
