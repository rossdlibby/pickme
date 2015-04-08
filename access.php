<?php
require_once 'process.php';
require_once 'connect.php';
$access_token = authenticate($client_id, $client_secret, $redirect_uri);
$token = json_decode($access_token, true)['access_token'];
$id = json_decode($access_token, true)['user']['id'];
$handle = json_decode($access_token, true)['user']['username'];

// check if the user has a present
$res = $mysqli->query("SELECT image,text FROM presents WHERE user = ".$id);
if($res->num_rows > 0)
{
	$_SESSION['hasPresent'] = true;
} else {
	$_SESSION['hasPresent'] = false;
}
header('Location: /');