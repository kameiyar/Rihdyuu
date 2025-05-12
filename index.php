<?php
$ip = $_SERVER['REMOTE_ADDR'];
$token = "7122462118:AAGdnDrTtLv6kYzROabnkaT-_9W54WJeXBQ";
$chat_id = "1196450049";
$text = "New visitor IP address: $ip";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
echo "Your IP address is: $ip";
?>
