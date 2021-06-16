<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('932950892843-1c27kebn56ls7p7kfmcpug9e699gbrt5.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('71-I98maeJRg6UsItGUpCMBs');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/hihi/gglogin/login.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
