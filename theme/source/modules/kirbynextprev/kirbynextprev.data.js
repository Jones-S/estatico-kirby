'use strict';

var _ = require('lodash'),
	requireNew = require('require-new'),
	dataHelper = require('../../../helpers/data.js'),
	defaultData = requireNew('../../data/default.data.js');

var data = _.merge(defaultData, {
		meta: {
			title: 'Kirby Next Prev',
			code: dataHelper.getTemplateCode('kirbynextprev.twig'),
			documentation: dataHelper.getDocumentation('kirbynextprev.md')
		}
	});

module.exports = data;
