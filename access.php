<?php
require_once 'process.php';
$access_token = authenticate($client_id, $client_secret, $redirect_uri);
return $access_token;