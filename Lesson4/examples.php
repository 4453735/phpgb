<?php
define("DIR_SMALL", "images/small/");
define("DIR_BIG", "images/big/");


function getImg($dir)
{
    if (is_array(scandir($dir))) {
        $dirscan = scandir($dir);
        $result = array_splice($dirscan, 2);

        for ($i = 0; $i < count($result); $i++) {
            echo '<a href="' . DIR_BIG . $result[$i] . '" target="_blank">
                  <img src="' . $dir . $result[$i] . '"
                  </a>';

        }
    }
}
var_dump($_FILES);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>

</head>

<body>
<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?php
        getImg(DIR_SMALL);
        ?>
    </div>
</div>
<div>
    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="myfile">
        <input type="submit" value="Отправить">
    </form>
</div>

</body>
</html>

