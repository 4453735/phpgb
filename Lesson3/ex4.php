<?php
/*
Объявить массив, индексами которого являются буквы русского языка,
а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. Она должна учитывать и заглавне буквы.
 */


function transLiter($text){
    $alfabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    ];
    $text_a = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
    $text = '';
    foreach($text_a as $val) {
        if (isset($alfabet[mb_strtolower($val)])) {
            if ($alfabet[$val] === $alfabet[mb_strtolower($val)]) {
                $text .= $alfabet[$val];
            } else {
                $text .= mb_strtoupper($alfabet[mb_strtolower($val)]);
            }
        }
        else {
                $text .= $val;
            }
        }

    return $text;
}
$text = "Привет! Мир!";
echo transLiter($text);
// выдает ошибку с заглавными буквами Notice: Undefined index: П in /Applications/XAMPP/xamppfiles/htdocs/php/lesson3/ex4.php on line 28



