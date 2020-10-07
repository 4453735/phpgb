<?php
include "db.php";
$result = mysqli_query($db,"SELECT * FROM photo ORDER BY likes DESC");
define('IMG_SMALL', 'images/small/');
define('IMG_BIG', './images/big/');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>Галерея</h2>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
    <a href="photo.php?id=<?=$row['id']?>"><img src="<?=IMG_SMALL . $row['name']?>"></a>
<?php endwhile; ?>
</body>
</html>






