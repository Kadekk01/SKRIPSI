<?php

$content = file_get_contents("php://input");
if ($content){

    //Token Bot
    $token = "5539218264:AAFjPAvAOM_73oOBWA4wqkHCjTnJjZVHoXc";

    //API link
    $apiLink = "https://api.telegram.org/bot$token/";
    //https://api.telegram.org/bot5539218264:AAFjPAvAOM_73oOBWA4wqkHCjTnJjZVHoXc

    //tes API : https://api.telegram.org/bot5539218264:AAFjPAvAOM_73oOBWA4wqkHCjTnJjZVHoXc/setwebhook?url=https://3ff6-103-233-152-66.ap.ngrok.io/webhook/

    $update = json_decode($content, true);

    $chat_id = $update['message']['chat']['id'];
    $text = $update['message']['text'];
    $chatName = $update['message']['chat']['first_name'].' - ' . $update['message']['chat']['username'];

    if($text == 'mulai'){
        
    }
    //kirim balasan
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Hai $chatName, yang anda ketik " . $text);

    //https://api.telegram.org/bot5539218264:AAFjPAvAOM_73oOBWA4wqkHCjTnJjZVHoXc/sendmessage?chat_id&$text
    
}else{
    echo "Hanya Telegram yang dapat mengakses URL ini...!!";
}
