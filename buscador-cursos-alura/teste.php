<?php

require 'vendor/autoload.php';


$client = new \GuzzleHttp\Client();
$res = $client->get('https://www.google.com');
echo $res->getStatusCode();
