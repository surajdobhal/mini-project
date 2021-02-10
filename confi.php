<?php

//start session on web page
session_start();

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('59459716619-pq5ic9n37s4c42aemkg9n926qpm19dql.apps.googleusercontent.com');
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('ncYFGNlGq3eRXF_EuC2lOvGN');
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/aapkepanditji.com/signup.php');
// to get the email and profile 
$google_client->addScope('email');
$google_client->addScope('profile');
?>