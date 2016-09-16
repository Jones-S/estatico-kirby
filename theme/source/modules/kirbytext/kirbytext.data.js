'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Text',
			code: dataHelper.getTemplateCode('kirbytext.twig'),
			documentation: dataHelper.getDocumentation('kirbytext.md')
		}
	});

module.exports = data;
