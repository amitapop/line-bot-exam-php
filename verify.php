<?php
$access_token = 'g6qoh2t2ES0MM70583gvymhEkcqIFRGdMJpOBIh/AVotPOY/Kws6oybku7Gz/dVJJu+E5TZqSoJpGrxZKp8tDHPjORxWr2AhMQBBJ0+ViFUMNpt/m+9J9KriCvmBAluonk6DeHv0QOcU+VI6qBBeDAdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
