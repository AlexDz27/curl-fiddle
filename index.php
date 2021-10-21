<?php

$ch = curl_init('https://jsonplaceholder.typicode.com/todos/1');

// Base options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return response instead of outputting it directly

// "Might-change" options
//curl_setopt($ch, CURLOPT_POST, true);

$response = curl_exec($ch);
curl_close($ch);

//var_dump($response);
echo $response;
