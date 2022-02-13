<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
</head>
<body>
<form action="confirmation.php" method="post">
            名前：<br />
            <input type="text" name="name" size="50" value="" /><br />
 
            メールアドレス：<br />
            <input type="text" name="mail" size="50" value="" /><br />
 
            問合せ内容：<br />
            <textarea name="inquiry" cols="50" rows="5"></textarea><br />
 
            <br />
            <a href="test2.php"><input type="submit" value="次へ"> </a>
</body>
</html>