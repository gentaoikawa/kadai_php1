<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
    <form action="write.php" method="post">
        </br>問１あなたの出身地はどこですか: <input type="text" name="birth">
        </br>問2あなたの年齢は何歳ですか: <input type="text" name="age">
        </br>問3あなたの職業は何ですか: </br>
        <input type="checkbox" name="work" value="正規社員">正規社員</br>
        <input type="checkbox" name="work" value="非正規社員">非正規社員</br>
        <input type="checkbox" name="work" value="自営業">自営業</br>
        <input type="checkbox" name="work" value="無職・その他">無職・その他</br>
         問4あなたの夢は何ですか: <input type="text" name="dream">
        </br>お名前: <input type="text" name="name">
        </br>EMAIL: <input type="text" name="mail">
        <input type="submit" value="送信">
    </form>
</body>

</html>
