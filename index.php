<?php

$token = "1986839701:AAHLCqCLR25DIbiUFKbqKr-synZeiGFrmvI";

$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->message;
$chat_id = $message->chat->id;

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=hi");

echo "Hello World!\n";