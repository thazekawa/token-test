<?php
require 'vendor/autoload.php';

//アクセストークン取得
$client = new Google_Client();
$client->setAuthConfig('gatsby-firebase-35beb-firebase-adminsdk-fbsvc-c8ca80ecf1.json');
$client->addScope('https://www.googleapis.com/auth/firebase.messaging');
$client->refreshTokenWithAssertion();
$access_token = $client->getAccessToken();

// 送るメッセージ　tokenに登録トークンを設定
$json = '{
    "message":{
        "notification":{"title": "ここにタイトルを入力",
        "body": "ここにボディを入力"},
        "token":"cPwNhuAxWPKD2w4howl-Be:APA91bF7O_tX6Jkb-qLSIp1CaN1egePP6U8N1gOrE87LeO_KVB8f_w50R1hD05EL9uNF2gE0oIwsDfwZOUZ4xhgTUz6xXblPYYYWZO84lcY0dleyvdHnVIM"}
}';

// curlの初期化
$ch2 = curl_init(); 

// アクセストークンをhttpヘッダーに設定
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $access_token["access_token"]
);

curl_setopt_array($ch2, array(
    CURLOPT_URL => 'https://fcm.googleapis.com/v1/projects/gatsby-firebase-35beb/messages:send',
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $json
));

// push送信
$response = curl_exec($ch2);

curl_close($ch2);
