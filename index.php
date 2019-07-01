<?php

require 'vendor/autoload.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$me = $MadelineProto->start();

$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
    $MadelineProto->messages->sendMessage([
        'peer' => "@Fogmart",
        'message' => "test"
    ]);

}
echo 'OK, done!'.PHP_EOL;
