<?php
//  Объяснить, как работает данный код:
$a = 5;
$b = '05';
var_dump($a == $b);         // True, т.к. операнды интерпритируются как целые числа
var_dump((int)'012345');     // Почему 12345? Тип вручную приведен к целому числу (int)
var_dump((float)123.0 === (int)123.0); // Почему false? Т.к. производится сравнение не только по значению, но по и типу
var_dump((int)0 === (int)'hello, world'); // Почему true? (int)'hello, world' равен 0, значения и типы равны
?>