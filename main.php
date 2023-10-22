<?php
require 'vendor/autoload.php';

use IPInfoAPI\IPInfo;

$accessToken = 'ACCESS_TOKEN';
$ipAddress = readline("Enter an IP address: ");

if (!filter_var($ipAddress, FILTER_VALIDATE_IP)) {
    exit ("Invalid IP address: $ipAddress\n");
}

$ipInfoAPI = new IPInfo($accessToken);
$response = $ipInfoAPI->getDetails($ipAddress);

echo 'IP Address: ' . $response->getIP() . PHP_EOL;
echo 'City: ' . $response->getCity() . PHP_EOL;
echo 'Region: ' . $response->getRegion() . PHP_EOL;
echo 'Country: ' . $response->getCountry() . PHP_EOL;