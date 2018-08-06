<?php
$access_token = 'SLqqwIe1yPJDE0GVN6laf+uM+mbdCc1fgS5irS0sK/8GPeqRskKBxOLALkLpQQA+Ju+E5TZqSoJpGrxZKp8tDHPjORxWr2AhMQBBJ0+ViFW9hqS8BqPt09V88U6NEqH+ipIx3jJn/ZUFijbJ/lGj8AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
