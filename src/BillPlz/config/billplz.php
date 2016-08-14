<?php

return [
	'local' => [
		'api_endpoint' => 'https://billplz-staging.herokuapp.com/api/v3/',
		'api_key' => env('BILLPLZ_API_KEY_LOCAL'),
		'collection_id' => env('BILLPLZ_COLLECTION_ID_LOCAL')
	],
	'production' => [
		'api_endpoint' => 'https://www.billplz.com/api/v3/',
		'api_key' => env('BILLPLZ_API_KEY'),
		'collection_id' => env('BILLPLZ_API_COLLECTION_ID')
	]
];