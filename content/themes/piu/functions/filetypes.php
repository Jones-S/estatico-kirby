<?php

add_filter('mime_types','add_custom_mime_types');
function add_custom_mime_types($mime_types){
	$mime_types['stl'] =  'application/wavefront-stl';
	$mime_types['obj'] =  'application/wavefront-obj';
	return $mime_types;
}
