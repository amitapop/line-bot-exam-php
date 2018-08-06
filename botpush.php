<?php



require "vendor/autoload.php";

$access_token = 'SLqqwIe1yPJDE0GVN6laf+uM+mbdCc1fgS5irS0sK/8GPeqRskKBxOLALkLpQQA+Ju+E5TZqSoJpGrxZKp8tDHPjORxWr2AhMQBBJ0+ViFW9hqS8BqPt09V88U6NEqH+ipIx3jJn/ZUFijbJ/lGj8AdB04t89/1O/w1cDnyilFU=';

$channelSecret = '11dbafbf2cdad7078b34efc52f3d906a';

$pushID = 'U10a83fb5dd64f26583bf747b7cfa8c4f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







