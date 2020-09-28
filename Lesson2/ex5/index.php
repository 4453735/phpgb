<?php

$menu = renderTemplate('menu');
$content = renderTemplate('content');
echo renderTemplate("template", $content, $menu);


function renderTemplate($page, $content = "", $menu = "") {
    ob_start();
    $filename = $page . ".php";
    if (file_exists($filename)) {
        include $page . ".php";
    }
    return ob_get_clean();
}
