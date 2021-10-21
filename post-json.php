<?php

/**
 * Make POST request with JSON data
 */

$requestData = [
  'request' => 'auth',
  'zxc' => false,
];

$ch = curl_init('http://localhost:8082/show-json.php');
// Base options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return response instead of outputting it directly
// Setting cURL options for POST request with JSON data
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));

$response = curl_exec($ch);
curl_close($ch);

echo $response;
