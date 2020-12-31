<?php
// ファイルを開く
$Fopen=fopen('./data/data.txt','r');
// ファイル内容を1行ずつ読み込んで出力
while ($line = fgets($Fopen)) {
    echo ($line);
}//fgets=1行目のテキストを受け取る、whileでx行目まで受け取る、x行目にテキスト無いと処理終わり
fclose($Fopen);
// ファイルを閉じる
?>
<html>

<head>
    <meta charset="utf-8">
    <title>表示</title>
</head>

<body>
<br><?= h($name);?>
<br><?= h($mail);?>
<br><?= h($age);?>
<br><?= h($work);?>
<br><?= h($dream);?>
<!--     <ul>
        <li><a href="index.php">index.php</a></li>
    </ul> -->
</body>

</html>