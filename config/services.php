<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/
    'google' => [ 
        
	// Client ID
	'gg_appid' => '676354765641-5q3urndlopj9m84qa60ee179t09vog2v.apps.googleusercontent.com',
	// Client Secret
	'gg_appsecret' => 'RdCBMPa5b3PMqnqgflzND6bs',
    'redirect' => 'http://laravelmy',   
	
],
    
    
    'github' => [
    'client_id' => '267c59939138c88c1a91',
    'client_secret' => '892f40bc91fa32886c7e8c04d9ce9416d0ce717e',
    'redirect' => 'http://laravelmy/account/github',
],

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],

];
