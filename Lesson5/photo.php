<?php
include "db.php";
$id = (int)$_GET['id'];
$plus = mysqli_query($db, "UPDATE photo SET likes = likes + 1 WHERE id = {$id}");
$result = mysqli_query($db, "SELECT * FROM photo where id = {$id}");


$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo <?=$row['name']?></title>
</head>
<body>
<h2>ФОТО <?=$row['name']?></h2>
<p>Просмотрено: <?=$row['likes']?></p>
<img src="images/big/<?=$row['name']?>">
<p><a href="index.php"><< НАЗАД</a></p>
</body>
</html>