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


$consumer_key       = 'QsDqFE4nRXJEhVXczsAYHWh3X';
$consumer_secret    = 'HX5on2JYoJb2gDJ4XJzDWRXy0Ve1cUZTl3PfUb9RD2grJoV7zj';
$access_token       = '404899306-pibg8hwbXFpQ6Thsec6pSXAE9oopg3UUV2S0zgpc';
$access_token_secret= 'TEJnLkgHUcOSAG85VzS9T98DvO7Tb4Odzdn2vo3Pjjt0J';
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

// ==============OLD CODE=====================
// $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
// $t = $connection->post("https://api.twitter.com/1.1/search/tweets.json?q=%23freebandnames&result_type=recent&count=100");
// ===========================================

// ==============NEW CODE=====================
// Consumer Key (API Key)	QsDqFE4nRXJEhVXczsAYHWh3X
// Consumer Secret (API Secret)	HX5on2JYoJb2gDJ4XJzDWRXy0Ve1cUZTl3PfUb9RD2grJoV7zj
//
// Access Token	404899306-pibg8hwbXFpQ6Thsec6pSXAE9oopg3UUV2S0zgpc
// Access Token Secret	TEJnLkgHUcOSAG85VzS9T98DvO7Tb4Odzdn2vo3Pjjt0J
// # = %23
?>
