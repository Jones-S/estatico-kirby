'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Footer',
			code: dataHelper.getTemplateCode('kirbyfooter.twig'),
			documentation: dataHelper.getDocumentation('kirbyfooter.md')
		}
	});

module.exports = data;
