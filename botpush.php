<?php



require "vendor/autoload.php";

$access_token = 'g6qoh2t2ES0MM70583gvymhEkcqIFRGdMJpOBIh/AVotPOY/Kws6oybku7Gz/dVJJu+E5TZqSoJpGrxZKp8tDHPjORxWr2AhMQBBJ0+ViFUMNpt/m+9J9KriCvmBAluonk6DeHv0QOcU+VI6qBBeDAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '11dbafbf2cdad7078b34efc52f3d906a';

$pushID = 'U10a83fb5dd64f26583bf747b7cfa8c4f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hello world! welcome to Line bot');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







