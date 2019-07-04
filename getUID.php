<?php

$token = "614983231:AAFr-IYreAkrKyFczPK00XAa4mzJGNoTZPI";
$url = "https://api.telegram.org/bot";
$chat_id = 727792637;
$phone_number = '+79502901932';
$first_name = 't';

$tUrl = $url.$token.'/sendContact?';
$tUrl .= 'chat_id='.$chat_id;
$tUrl .= '&phone_number='.$phone_number;
$tUrl .= '&first_name='.$first_name;
echo $tUrl;
echo '<br>';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $tUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$answer = curl_exec($curl);

echo $answer;