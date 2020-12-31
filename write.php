<?php
// ファイルに書き込み

$time=date('Y-m-d H:i:s');
$name=$_POST['name'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$work = $_POST['work'];
$dream = $_POST['dream'];
$file=fopen('./data/data.txt','a');
fwrite($file,$time.'/'.$name.'/'.$mail.'/'.$age.'/'.$work.'/'.$dream."\n");
fclose($file);
// 文字作成
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

 <h1>書き込みしました。</h1>



    <ul>
        <li><a href="read.php">結果を確認する</a></li>
    </ul>
</body>

</html>
