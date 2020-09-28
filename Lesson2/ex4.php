<?php
// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function sum($x, $y) {
    return $x + $y;
}

function difference($x, $y) {
    return $x - $y;
}

function multiplication($x, $y) {
    return $x * $y;
}

function division($x, $y) {
    if ($y != 0) {
        return $x / $y;
    } else {
        echo "На ноль делить нельзя";
    }
}

function mathOperation($x, $y, $operation) {
    switch ($operation) {
        case "sum":
            return sum($x, $y);
        case "difference":
            return difference($x, $y);
        case "multiplication":
            return multiplication($x, $y);
        case "division":
            return division($x, $y);
    }
}

echo mathOperation(5, 2, "sum");
echo mathOperation(5, 2, "difference");
echo mathOperation(5, 2, "multiplication");
echo mathOperation(5, 2, "division");