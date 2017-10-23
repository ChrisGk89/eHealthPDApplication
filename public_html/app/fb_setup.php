<?php
//Facebook Setup with the proper app_id app_secret and default_graph_version that we write in the config.php file
$fb = new \Facebook\Facebook([
    'app_id' => $config['fb']['id'],
    'app_secret' => $config['fb']['secret'],
    'default_graph_version' => $config['fb']['version']
]);

//Facebook authentication access token save
$handler = $fb->getRedirectLoginHelper();

//Callback URL
$callbackUrl = $handler->getLoginUrl($config['fb']['callback_url'], $config['fb']['permission']);