<?php


$access_token = 'qBoxjDO5Wk04JI+WRd3YrjkBE5znWb4aWRmoSFArYnXtljFdNDLz7REpcAvMQjyHYaNdCogLZAQNG+yLJO5yNxs4oQxqulZpV2zL9OrCxTY+ReMY9sS38dLGjMPZztegT/EHvs9hbBs4jhQsVpBb6QdB04t89/1O/w1cDnyilFU=';

$userId = 'Ue11448d3151ac1c134689864dbe94e49';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

