<?php
$menu = [
    'Главная' => './',
    'Каталог' => './?page=catalog',
    'Подкаталог' => [
        'Пицца' => './?page=catalog1',
        'Напитки' => './?page=catalog2',
        'Фрукты' => './?page=catalog3'
    ],
];

echo "<ul>";
foreach ($menu as $key => $value) {
    if (is_array($value)){
        echo "<ul>";
        foreach ($value as $intkey => $intvalue) {
            echo "<li><a href='{$intvalue}'>{$intkey}</a></li>";
        }
        echo "</ul>";
    } else {

        echo "<li><a href='{$value}'>{$key}</a></li>";

    }
}
echo "</ul>";