<?php
require_once 'process.php';
$access_token = authenticate($client_id, $client_secret, $redirect_uri);
if($access_token)
	echo json_decode($access_token, true)['access_token'];
return 'fail';