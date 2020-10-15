<?php


//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
function prepareVariables($page, $action='')
{
    $params = [];
    switch ($page) {
        case 'index':
            $params['name'] = 'admin';
            break;

        case 'feedback':

            doFeedbackAction($params, $action);
            $params['message'] = '';
            $params['feedback'] = getAllFeedback();

            break;

        case 'gallery':
            if ($_POST) {
                uploadFile();
            }

            $params['gallery'] = getGallery();
            break;
        case 'photo':
            $id = (int)$_GET['id'];
            getPlusLike($id);
            $params['gallery'] = getOnePhoto($id);
            break;

        case 'news':
            $params['news'] = getNews();
            if ($action = 'edit') {}
            break;

        case 'newsOne':
            $id = (int)$_GET['id'];
            $params['news'] = getOneNews($id);
            break;

        case 'catalog':
            $params['catalog'] = getCatalog();
            break;

        case 'good':
            $id = (int)$_GET['id'];
            doFeedbackAction($params, $action);
            $params['catalog'] = getOneGood($id);
            $params['feedback'] = getIdGoodFeedback($id);
            $params['id_good'] = $id;
            break;
    }
    return $params;
}

//Функция, возвращает текст шаблона $page с подстановкой переменных
//из массива $params, содержимое шабона $page подставляется в
//переменную $content главного шаблона layout для всех страниц
function render($page, array $params = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}


//Функция возвращает текст шаблона $page с подставленными переменными из
//массива $params, просто текст
function renderTemplate($page, array $param = [])
{
    ob_start();
    //params
    //[
    // 'menu' => '<a>...
    // 'content' => 'Добро пожало
    //]
    // foreach ($params as $key => $value) {
    //     $$key = $value;
    // }
    if (!is_null($param)) {
        extract($param);
    }


    $fileName = TEMPLATES_DIR . $page . ".php";


    if (file_exists($fileName)) {
        include $fileName;
    } else {
        Die("Страницы {$fileName} не существует.");
    }


    return ob_get_clean();
}