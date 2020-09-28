<?php
//*С помощью рекурсии организовать функцию возведения числа в степень.
//Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

// Рекурсия
function numToPower($n, $pow) {
    if ($n == 0) {
        return 0;
    } else if ($pow == 0) {
        return 1;
    } else if ($pow < 0) {
        return numToPower(1 / $n, -$pow);
    } else {
        return $n * numToPower($n, $pow - 1);
    }
}

echo numToPower(3, -5);