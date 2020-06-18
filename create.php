<?php
//var_dump($_POST);
//exit();
// データの受取
$deadline = $_POST['deadline'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$era = $_POST['era'];
$answer = $_POST['answer'];
// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
$write_data = array($deadline, $name, $sex, $era, $answer);
// ファイルを開く処理
$file = fopen('data/data.csv', 'a'); //aはなかったら新規作成
// ファイルロックの処理
flock($file, LOCK_EX);
// ファイル書き込み処理
//var_dump($file, $write_data);
fputcsv($file, $write_data);
// ファイルアンロックの処理
flock($file, LOCK_UN);
// ファイルを閉じる処理
fclose($file);
// 入力画面へ移動
header("Location:sent.html");
// txtファイルへの書き込みのみ行うので表示する画面は存在しない
