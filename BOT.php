<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '8668b7b5a0a6a607719e5b8ac888fbee';
$access_token  = 'm3edsF8K/XFewV6Td722LIJdz2TRlyThaocqJcZxg2LbTU4wZOYqhi/NLmXlLhOPVo2AbLYmn4OOLWowNZx3/JPksAwzDwegEUGzu4xAiAQjHtBdoUwBDsuYSZISbJndqkmqE/Q6AzJPvmzCt/ejkQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
