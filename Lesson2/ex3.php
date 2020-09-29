<?php
//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
//Обязательно использовать оператор return.
//В делении проверьте деление на 0 и верните текст ошибки.

function sum($x, $y) {
    return "Сумма чисел {$x} и {$y} = " . ($x + $y) . "<br>";
}

function difference($x, $y) {
    return "Разность чисел {$x} и {$y} = " . ($x - $y) . "<br>";
}

function multiplication($x, $y) {
    return "Произведение чисел {$x} и {$y} = " . ($x * $y) . "<br>";
}

function division($x, $y) {
    return ($y != 0) ? "Частное чисел {$x} и {$y} = " . ($x / $y) . "<br>" : "На ноль делить нельзя";
//    if ($y != 0) {
//        return $x / $y;
//    } else {
//        echo "На ноль делить нельзя";
//    }
}

echo sum(5, 2);
echo difference(5, 2);
echo multiplication(5, 2);
echo division(6, 3);