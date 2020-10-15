<?php
//Точка входа в приложение, сюда мы попадаем каждый раз когда загружаем страницу

//Первым делом подключим файл с константами настроек
//TODO Сделать пути абсолютными
include "../config/config.php";

//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index

$url_array = explode('/', $_SERVER['REQUEST_URI']);

if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}


//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
$params = [];
switch ($page) {
    case 'index':
        $params['name'] = 'admin';
        break;

    case 'gallery':
        if ($_POST) {
            uploadFile();
            header();
        }

        $params['gallery'] = getGallery();
        break;

    case 'photo':
        $id = (int)$_GET['id'];
        $params['gallery'] = getPlusLike($id);
        $params['gallery'] = getOnePhoto($id);
        break;

    case 'news':
        $params['news'] = getNews();

        break;

    case 'newsOne':
        $id = (int)$_GET['id'];
        $params['news'] = getOneNews($id);
        break;

    case 'catalog':
        $params['catalog'] = [
            [
                'name' => 'Пицца',
                'price' => 24
            ],
            [
                'name' => 'Чай',
                'price' => 1
            ],
            [
                'name' => 'Яблоко',
                'price' => 12
            ],
        ];
        break;
}
_log($params, 'params');
echo render($page, $params);
