<?php

function getUID($phone_number){
    $token = "614983231:AAFr-IYreAkrKyFczPK00XAa4mzJGNoTZPI";
    $url = "https://api.telegram.org/bot";
    $chat_id = 727792637;
    $res = null;
//    $phone_number = '+79502901932';
    $first_name = 't';

    $tUrl = $url.$token.'/sendContact?';
    $tUrl .= 'chat_id='.$chat_id;
    $tUrl .= '&phone_number='.$phone_number;
    $tUrl .= '&first_name='.$first_name;
//    echo $tUrl;
//    echo '<br>';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $tUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $answer = curl_exec($curl);

//    $answer = '{"ok":true,"result":{"message_id":99,"from":{"id":614983231,"is_bot":true,"first_name":"ainarry_bot","username":"ainarry_bot"},"chat":{"id":727792637,"first_name":"\u0410\u043b\u0435\u043a\u0441\u0430\u043d\u0434\u0440","username":"Fogmart","type":"private"},"date":1562233806,"contact":{"phone_number":"79502901932","first_name":"t","user_id":727792637}}}';
//    $answer = '{"ok":true,"result":{"message_id":106,"from":{"id":614983231,"is_bot":true,"first_name":"ainarry_bot","username":"ainarry_bot"},"chat":{"id":727792637,"first_name":"\u0410\u043b\u0435\u043a\u0441\u0430\u043d\u0434\u0440","username":"Fogmart","type":"private"},"date":1562288748,"contact":{"phone_number":"95029019","first_name":"t"}}}';
    $answer = json_decode($answer);

    if ($answer->ok) {
        if (isset($answer->result->contact->user_id)) {
            $res = $answer->result->contact->user_id;
        }
    }
    return $res;

}

//echo getUID('+79502901932');