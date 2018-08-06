<?php



require "vendor/autoload.php";

$access_token = 'SLqqwIe1yPJDE0GVN6laf+uM+mbdCc1fgS5irS0sK/8GPeqRskKBxOLALkLpQQA+Ju+E5TZqSoJpGrxZKp8tDHPjORxWr2AhMQBBJ0+ViFW9hqS8BqPt09V88U6NEqH+ipIx3jJn/ZUFijbJ/lGj8AdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







