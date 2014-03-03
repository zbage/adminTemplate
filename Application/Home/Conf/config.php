<?php
return array(
	'URL_ROUTEr_ON' => true,
	'URL_ROUTE_RULES' => array(
		'category/:alias' => 'Category/index',
		'article/api/id/:id'=>'Article/api',
		'article/:alias' => 'Article/index',
	)
);