<?php
//exit;

require 'vendor/autoload.php';
require 'getUID.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$me = $MadelineProto->start();

$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {

    $uid = getUID('+79502901932');

    $MadelineProto->messages->sendMessage([
        'peer' => $uid,
        'message' => "Отправка по номеру телефонв"
    ]);
}


echo 'OK, done!'.PHP_EOL;
