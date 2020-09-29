<?php
//*С помощью рекурсии организовать функцию возведения числа в степень.
//Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

// Рекурсия
function numToPower($n, $pow) {
    if ($pow == 1) {
        return $n;
    } else if ($pow < 0) {
        // Проверка
        // echo "n = {$n}, pow = {$pow} <br>";
        return numToPower(1 / $n, -$pow);
    } else {
        // Проверка
        // echo "n = {$n}, pow = {$pow} <br>";
        return $n * numToPower($n, $pow - 1);

    }
}

echo numToPower(2, 25);