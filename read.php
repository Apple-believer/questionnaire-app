<?php
// POSTを受け取る
$name = $_POST['name'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];


?>

<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        ul{
            list-style: none;
        }
    </style>
</head>

<body>
<table border="1">
  <tr>
    <th>お名前</th><th>メール</th><th>住所</th><th>電話番号</th>
  </tr>
  <tr>
    <td> <?= ($name) ?></td><td><?= ($mail) ?></td> <td><?= ($address) ?></td><td><?= ($phone_number)  ?></td>
  </tr>
  
</table>
    <ul>
        <li><a href="write.php">入力画面に戻る</a></li>
    </ul>
</body>

</html>
