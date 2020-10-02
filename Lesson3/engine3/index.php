<?php

define('TEMPLATES_DIR', './templates/');
define('LAYOUTS_DIR', 'layouts/');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$params = [];

switch ($page) {
    case 'index':
        $params['name'] = 'admin';
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

echo render($page, $params);

function render($page, $params = []) {
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}



function renderTemplate($page, $params = [])
{
    //params
    //[
    // 'menu' => '<a>...
    // 'content' => 'Добро пожало
    //]
    // foreach ($params as $key => $value) {
    //     $$key = $value;
    // }
    if (is_array($params)) {
        extract($params);
    }
    ob_start();
    $fileName = TEMPLATES_DIR . $page . ".php";
    include $fileName;
    return ob_get_clean();
}