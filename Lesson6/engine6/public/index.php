<?php
//Точка входа в приложение, сюда мы попадаем каждый раз когда загружаем страницу

//Первым делом подключим файл с константами настроек
//TODO Сделать пути абсолютными
include "../config/config.php";

//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index

$url_array = explode('/', $_SERVER['REQUEST_URI']);
// $action = $url_array[2];
if ($url_array[1] == "") {
    $page = 'index';
    $action = $url_array[1];
} else {
    $page = $url_array[1];
    $action = $url_array[2];
}

$params = prepareVariables($page, $action);

echo render($page, $params);
