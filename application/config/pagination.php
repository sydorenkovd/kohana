<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'default' => array(
		'current_page'      => array('source' => 'route', 'key' => 'page'),
		'total_items'       => 2,
		'items_per_page'    => 1,
		'view'              => 'pagination/floating',
		'auto_hide'         => FALSE,
		'first_page_in_url' => FALSE,
	),

);
