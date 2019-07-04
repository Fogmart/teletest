<?php

require 'vendor/autoload.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$me = $MadelineProto->start();

$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
//    'peer' => "@Fogmart",
    $MadelineProto->messages->sendMessage([
        'peer' => "727792637",
        'message' => "test - test"
    ]);
}


echo 'OK, done!'.PHP_EOL;
