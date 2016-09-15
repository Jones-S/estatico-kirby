'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Logo',
			code: dataHelper.getTemplateCode('logo.twig'),
			documentation: dataHelper.getDocumentation('logo.md')
		}
	});

module.exports = data;
