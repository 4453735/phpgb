<?php

//Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильнымисклонениями,
//например: 22 часа 15 минут, 21 час 43 минуты.

function myTime($hour, $minute) {
    $resulth = ($hour <= 10) ? $hour % 10 : $hour % 20;
    switch ($resulth) {
        case 1:
            echo "$hour час";
            break;
        case 2:
        case 3:
        case 4:
            echo "$hour часа";
            break;
        default:
            echo "$hour часов";
            break;
    }
    $resultm = ($minute <= 10) ? $minute % 10 : $minute % 20;
    switch ($resultm) {
        case 1:
            return "$minute минута";
        case 2:
        case 3:
        case 4:
            return "$minute минуты";
        default:
            return "$minute минут";
    }
}
$hour = rand(0, 24);
$minute = rand(0, 59);
echo myTime($hour, $minute);
//echo "<br>" . $hour % 4;
