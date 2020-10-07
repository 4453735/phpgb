<?php

function getGallery($path) {
    $galleryScan = (scandir($path));
    return array_splice($galleryScan, 2);
}

function uploadFile() {
    if (isset($_POST['load'])) {
        $path_small = ROOT . SMALL_PATH . $_FILES['myfile']['name'];
        var_dump($path_small);
        $path_big = BIG_PATH . $_FILES['myfile']['name'];


        // Проверка расширения файла
        $blacklist = array(".php", ".phtml", ".php3", ".php4");
        foreach ($blacklist as $item) {
            if(preg_match("/$item\$/i", $_FILES['myfile']['name'])) {
                echo "Скрипты загружать нельзя";
                exit;
            }
        }

        // Проверка на размер файла не более 5Мб
        if ($_FILES['myfile']['size'] > 1024 * 5 * 1024) {
            echo "Файл более 5 Мб";
            exit;
        }

        // Проверка содержания файла изображения
        $imageinfo = getimagesize($_FILES['myfile']['tmp_name']);
        if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
            echo "Файл не jpg";
            exit;
        }

        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $path_big)) {
            // RESIZE
            $image = new SimpleImage();
            $image->load($path_big);
            $image->resizeToWidth(150);
            $image->save($path_small);
            header("Location: /?page=gallery");
        }

    }

}