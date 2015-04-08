<?php
require_once 'process.php';
$access_token = authenticate($client_id, $client_secret, $redirect_uri);
$token = json_decode($access_token, true)['access_token'];
$id = json_decode($access_token, true)['user']['id'];
$handle = json_decode($access_token, true)['user']['username'];
header('Location: https://api.instagram.com/v1/users/search?q=jack&access_token=ACCESS-TOKEN');