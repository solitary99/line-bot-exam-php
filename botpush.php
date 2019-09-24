<?php



require "vendor/autoload.php";

$access_token = 'qOYad6DbZvE/hrEEpE1z+DLG5ih/Ba9loQCGcEq/KrTyro6m2VdzHXjUR/3uDaYqTjAYnPdhGpafpIGj04qIU+Zt1JesdQ3VOBdBIG6sPrUNBSw/sZ0L95F+6ob4BSlDfeWd3oYI9mQkWf0XjUMWFQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '063ba7745357cc8745fc0f220f1cac4e';

$pushID = 'Ud402a580606de5df48f24d68b95a7bfd
';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







