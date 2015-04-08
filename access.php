<?php
require_once 'process.php';
$access_token = authenticate($client_id, $client_secret, $redirect_uri);
if($access_token)
	var_dump($access_token);
return 'fail';