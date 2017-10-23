<?php
//If the state is not setup set it up
if(!isset($_SESSION['state'])){
  	//Randomization of microtime and concatenate with the IP address where the request is being made and send it to github as state param. (Unique Token)
    $_SESSION['state'] = hash('sha256', microtime(TRUE).rand().$_SERVER['REMOTE_ADDR']);
}
//Setting the parameters for gitHubLoginUrl
$params = [
   'client_id' => $config['github']['id'],
   'redirect_uri' => $config['github']['callback_url'],
    'state' => $_SESSION['state'],
    'scope' => $config['github']['scope']
];
//This is taken from github website https://developer.github.com/apps/building-integrations/setting-up-and-registering-oauth-apps/about-authorization-options-for-oauth-apps/
$gitHubLoginUrl = 'http://github.com/login/oauth/authorize?'.http_build_query($params);