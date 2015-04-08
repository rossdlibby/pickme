<?php
$auth = false;
// instadata
$client_id = 'c4eccd0640f64b55a1e608e50edbc0c9';
$client_secret = '0336141caa794975bbab528bde9a3d03';
$redirect_uri = 'http://pickme.us';
function url($client_id, $redirect_uri)
{
	return 'https://api.instagram.com/oauth/authorize/?client_id='.$client_id.'&redirect_uri='.$redirect_uri.'&response_type=code';
}
$url = url($client_id, $redirect_uri);

function authUrl()
{
	return 'https://api.instagram.com/oauth/access_token';
}

function authenticate($client_id, $client_secret, $redirect_uri)
{

	// retrieve the access token
	$code = $_GET['code'];
	$url = authUrl();

	$params = [
		'client_id' => $client_id,
		'client_secret' => $client_secret,
		'grant_type' => 'authorization_code',
		'redirect_uri' => $redirect_uri,
		'code' => $code
	];

	// curl
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
	$head = curl_exec($ch);
	curl_close($ch);
	return $head;
}