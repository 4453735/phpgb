<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SMALL_PATH', 'images/small/');
define('BIG_PATH', 'images/big/');

function getImage($path)
{

    $photoArr = scandir($path);
    $photos = array_splice($photoArr, 2);

    for ($i = 0; $i < count($photos); $i++) {
        echo "<a rel=\"gallery\" class=\"photo\" href=\"" . BIG_PATH . "{$photos[$i]}\" target=\"_blank\"><img src=\"" . SMALL_PATH . "/{$photos[$i]}\"></a>";
    }
}

$messConfig = [
    'OK' => 'Файл загружен',
    'ERROR' => 'Ошибка загрузки файла',
    'ERROR1' => 'Можно загружать только JPG изображения',
    'ERROR2' => 'Загрузка скриптов запрещена',
    'ERROR3' => 'Максимальный размер файла больше 5 Мб',
    '0' => ''
];


if (empty($_GET)) {
    $message = 0;
} else {
    $message = strip_tags($_GET['message']);
}

include('classSimpleImage.php');

//if (isset($_POST['load'])) {
//    $path_small = SMALL_PATH . $_FILES['image']['name'];
//    $path_big = BIG_PATH . $_FILES['image']['name'];
//    if (move_uploaded_file($_FILES['image']['tmp_name'], $path_big)) {
//        $image = new SimpleImage();
//        $image->load($path_big);
//        $image->resizeToWidth(150);
//        $image->save($path_small);
//        header("Location: ex1.php?message=OK");
//    } else {
//        header("Location: ex1.php?message=ERROR");
//    }
//}

if (isset($_POST['load'])) {
    $path_small = SMALL_PATH . $_FILES['myfile']['name'];
    $path_big = BIG_PATH . $_FILES['myfile']['name'];


    // Проверка расширения файла
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {
        if(preg_match("/$item\$/i", $_FILES['myfile']['name'])) {
            header("Location: ex1.php?message=ERROR2");
            exit;
        }
    }

    // Проверка на размер файла не более 5Мб
    if ($_FILES['myfile']['size'] > 1024 * 5 * 1024) {
        header("Location: ex1.php?message=ERROR3");
        exit;
    }

    // Проверка содержания файла изображения
    $imageinfo = getimagesize($_FILES['myfile']['tmp_name']);
    if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
        header("Location: ex1.php?message=ERROR1");
        exit;
    }

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $path_big)) {
        // RESIZE
        $image = new SimpleImage();
        $image->load($path_big);
        $image->resizeToWidth(150);
        $image->save($path_small);
        header("Location: ex1.php?message=OK");
    } else {
        header("Location: ex1.php?message=ERROR");
    }

}


?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript">
        $(document).ready(function(){
            $("a.photo").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                speedIn: 500,
                speedOut: 500,
                hideOnOverlayClick: false,
                titlePosition: 'over'
            });	}); </script>

</head>

<body>
<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?= getImage(SMALL_PATH) ?>
    </div>
    <div class="post_title"><h2>Загрузка файла</h2></div>
    <div>
        <?= $messConfig[$message] ?>
        <form enctype="multipart/form-data" method="post">
            <input type="file" name="myfile">
            <input type="submit" name="load" value="Загрузить">
        </form>
    </div>
</div>


</body>
