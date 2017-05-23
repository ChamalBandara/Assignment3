<?php

if (!session_id()) {
    session_start();
}


ini_set('display_errors', 1);
error_reporting(~0);

// Include the autoloader provided in the SDK
require_once __DIR__ . '/vendor/facebook/graph-sdk/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1240459936070761', // Replace {app-id} with your app id
  'app_secret' => '8356c259950dee32883646bf0e44e2e7',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
$scope       = array("email","user_posts","publish_actions","user_posts","user_photos"); 

$loginUrl = $helper->getLoginUrl('http://localhost/fbapp2/fb-callback.php', $scope );

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';



?>
