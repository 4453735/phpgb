<?php
$x = 5;
$y = 42;

if ($x > $y) {
    echo $x + $y;
} else {
    echo $x * $y;
}

if ($x > $y) {
    echo "<br> $x больше, чем $y <br>";
} else if ($x < $y) {
    echo "<br> $x меньше, чем $y <br>";
} else {
    echo "<br> $x равен $y <br>";
}

$result = ($x > $y) ? ($x + $y) : ($x * $y);

echo $result;

$now = "ыосроыр";
switch ($now) {
    case "ночь":
        echo "Доброй ночи!";
        break;
    case "утро":
        echo "Доброе утро!";
        break;
    case "день":
        echo "Добрый день!";
        break;
    case "вечер":
        echo "Добрый вечер!";
        break;
    default:
        echo "Нет такого времени суток!";
        break;
}

function compare_numbers($x, $y) {
    if ($x > $y) {
        echo "<br> $x > $y";
    } else if ($x < $y) {
        echo "<br> $x < $y";
    } else {
        echo "<br> $x = $y";
    }
}

compare_numbers(rand(0, 100), rand(0, 100));

function average($x, $y) {
    return ($x + $y) / 2;
}

$a = rand(0, 100);
$b = rand(0, 100);
$avg = average($a, $b);
echo "<br> Среднее арифмитическое чисел $a и $b равно $avg";

//Функция с параметром, определенным по умолчанию
function mult($a, $b = 1){
    return $a * $b;
}

echo "<br>" . mult(8);
echo "<br>" . mult(8, 2);

// Рекурсия
function fibonacci($n, $prev1 = 1, $prev2 = 0) {
    $current = $prev1 + $prev2;
    echo "<br> $current";
    if ($n > 1) {
        fibonacci($n - 1, $current, $prev1);
    }
}

fibonacci(15);

function changeX($x) {
    $x += 5;
    echo $x;
}
$x = 1;
echo $x;
changeX($x);
echo $x;

$name = "Артем";
$string = "Привет, $name";
$otherString = str_replace("Привет", "Goodbye", $string);
echo $otherString;

?>