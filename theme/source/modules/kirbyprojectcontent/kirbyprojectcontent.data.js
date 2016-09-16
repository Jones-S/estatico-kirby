'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'kirbyprojectcontent',
			code: dataHelper.getTemplateCode('kirbyprojectcontent.twig'),
			documentation: dataHelper.getDocumentation('kirbyprojectcontent.md')
		}
	});

module.exports = data;
