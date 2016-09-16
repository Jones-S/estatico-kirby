'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Header',
			code: dataHelper.getTemplateCode('kirbyheader.twig'),
			documentation: dataHelper.getDocumentation('kirbyheader.md')
		}
	});

module.exports = data;
