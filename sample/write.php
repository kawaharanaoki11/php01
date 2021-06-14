<?php

// POSTデータ取得
$name = $_POST["name"];
$email = $_POST["mail"];
$area = $_POST["area"];
$food = $_POST["food"];
$point = $_POST["point"];
// 申込時間取得
$date = date("Y/m/d H:i:s");

echo $email;
// ファイルを読み込む
$file = fopen("data/data.txt","a");
// ファイルに書き込む
fwrite($file,$date." ".$name." ".$email." ".$area." ".$food." ".$point."\n");
// ファイルを閉じる
fclose($file);

// read.phpにリダイレクト
header("Location: read.php");
exit();




?>