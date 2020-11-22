<?php
require "vendor/autoload.php";
$access_token = 'S9EWO23aptNxObncf9d7neZkT6sLwqT5cOlIIzJonyF3tRkmk6ByWwzrLdQDyM6pshsS2M9a4Cq8g6uPC4DU+Wc2xUSUEyKvC4puMN9OVOJZ3GxXejgPluFKiwd2Az/dAPxfnib84ZPRvuekJV+2MgdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'a3394241ca70e0efdd25a77e07ea89b0';
$idPush = 'Ub18024860299025a86bb26b1428885ca'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
