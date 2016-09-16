'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Meta',
			code: dataHelper.getTemplateCode('kirbymeta.twig'),
			documentation: dataHelper.getDocumentation('kirbymeta.md')
		}
	});

module.exports = data;
