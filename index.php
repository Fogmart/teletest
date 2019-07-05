<?php
//exit;

require 'vendor/autoload.php';
require 'getUID.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$me = $MadelineProto->start();

$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);
$phone_number = $_GET["PN"];
echo $phone_number;

if (isset($phone_number)){
    $uid = getUID('+79502901932');
    if ($uid == null){
        echo "Неправильный номер";
        exit;
    }
    $MadelineProto->messages->sendMessage([
        'peer' => $uid,
        'message' => "Отправка по номеру телефонв"
    ]);
    echo 'OK, done!';
} else {
    echo "Введите номер телефона!";
}



