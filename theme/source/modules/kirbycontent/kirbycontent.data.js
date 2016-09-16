'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Content',
			code: dataHelper.getTemplateCode('kirbycontent.twig'),
			documentation: dataHelper.getDocumentation('kirbycontent.md')
		}
	});

module.exports = data;
