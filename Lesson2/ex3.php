<?php
//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
//Обязательно использовать оператор return.
//В делении проверьте деление на 0 и верните текст ошибки.

function sum($x, $y) {
    return $x + $y;
}

echo sum(5, 2);

function difference($x, $y) {
    return $x - $y;
}

echo difference(5, 2);

function multiplication($x, $y) {
    return $x * $y;
}

echo multiplication(5, 2);

function division($x, $y) {
    if ($y != 0) {
        return $x / $y;
    } else {
        echo "На ноль делить нельзя";
    }
}

echo division(6, 2);