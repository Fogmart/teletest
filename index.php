<?php

require 'vendor/autoload.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$me = $MadelineProto->start();

$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
    $MadelineProto->messages->sendMessage([
        'peer' => 79502901932,
        'message' => "test"
    ]);

}
echo 'OK, done!'.PHP_EOL;
