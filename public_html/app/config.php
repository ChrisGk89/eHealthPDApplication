<?php

return [
  	//Web App connection with the MySQL database
    'database' => [
        'dsn' => 'mysql:host=shareddb1d.hosting.stackcp.net;dbname=eHealthPD-3137088a',
        'username' => 'eHealthPD-3137088a',
        'password' => 'ehealthpd1234'
    ],
  	//Facebook Credentials for Login from Facebook developers Console (https://developers.facebook.com/)
  	'fb' => [
	'id' => '1435163126553264',
	'secret' => '6095376eb507b75c9db840063846ff4f',
  	'version' => 'v2.10',
  	'permission' => ['email'],
  	'callback_url' => 'http://ehealthpd-com.stackstaging.com/fb-callback.php'
	
	],
  	//Google Credentials for Login from Google Developers Console (https://developers.google.com/)
  	'google' =>	[
        'id' => '816985637762-vnrvajaumtrbp98jcvhhj2m2fsge1h1t.apps.googleusercontent.com',
        'secret' => 'ZbiX0Yy2g_NPpv9gqdQB-bBv',
        'callback_url' => 'http://ehealthpd-com.stackstaging.com/gp-callback.php',
        'scope' => ['https://www.googleapis.com/auth/userinfo.profile','https://www.googleapis.com/auth/userinfo.email']//like fb permission
  ],
  //Github Credentials for Login from Github Developers Console (https://github.com/settings/applications/)
  'github' => [
        'id' => '82377e0e69d82598a833',
        'secret' => 'a7419b069cc6cb62824ad28a7c7da08563599e93',
        'callback_url' => 'http://ehealthpd-com.stackstaging.com/git-callback.php',
        'scope' => 'user'//like fb permission
    ]
];