<?php


$access_token = '9BbaBbfiXNgwe48mBEpXPzwChYQb5CceNxNIBtcJqvDezFewHmxP0NnjvW6zbVcGfzkgSCzvRbxIk9ak4iLQbQLo9fl+ufMGjWaof7cNHLnRJS7ORrJQhafFGVrAN9AZOW3kRDz/87F0jK1sCPPw2wdB04t89/1O/w1cDnyilFU=';

$userId = 'U871c968a616d1dd759b09eff54bd3331';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

