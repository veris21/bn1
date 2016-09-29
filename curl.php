<?php

// =======================================
// Setting untuk include Twitter Oauth v.2
// Code Write by : Veris juniardi
// for : http://bn1.juniard.id
// =======================================

// =================V.1===================
//
// require "TwitterOAuth.php";

// =======================================
// =================V.2===================
//
require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;
//
// ========================================


$consumer_key       = 'CONSUMER_KEY';
$consumer_secret    = 'CONSUMER_SECRET';
$access_token       = 'ACCESS_TOKEN';
$access_token_secret= 'TOKEN_SECRET_KEY';
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);


// # = %23
?>
