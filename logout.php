<?php
session_start();
session_destroy();
header('location:home.php');
//logout.php

//include('confi.php');

//Reset OAuth access token
//$google_client->revokeToken();

//Destroy entire session data.

echo"logout sucessfully";
//redirect page to index.php


?>