<?php
$access_token = '8HgeAnQzDQLEAG4BCaxpcTsfr2POKOnnvv4QlNb6mgR4+XYvxcYGFUhf5fDg0xjHO2EGjavJWT/oYHwbgQ2rl/k8caRgJexhXnLu0d8//4z75P3s4Xqk/BQScM3BdivwVqnasGqY0h1V1X67LsgXPAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;