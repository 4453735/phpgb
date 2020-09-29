<?php
// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

// Подключаем файл с функциями из предыдущего задания
include 'ex3.php';

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
        default:
            return "Ошибка!";
    }
}

// вывод дублируется, т.к. в подключенном файле есть команды на вывод echo

echo mathOperation(5, 2, "sum");
echo mathOperation(5, 2, "difference");
echo mathOperation(5, 2, "multiplication");
echo mathOperation(5, 2, "division");