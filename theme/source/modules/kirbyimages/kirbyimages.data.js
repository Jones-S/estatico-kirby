'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Images',
			code: dataHelper.getTemplateCode('kirbyimages.twig'),
			documentation: dataHelper.getDocumentation('kirbyimages.md')
		}
	});

module.exports = data;
