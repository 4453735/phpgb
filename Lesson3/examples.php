<?php
$n = 0;
$i = 1;

// Цикл while
while ($i <= $n) {
    echo "{$i} <br>";
    $i++;
}

// Цикл do ... while
//do {
//    echo "{$i} <br>";
//    $i++;
//} while ($i <= $n);

$x =10;

for ($i = 1; $i <= $x; $i++) {
    echo "Цикл for {$i} <br>";
}

// Выход из всего процесса цикла

$a = 5;
$b = 1;

while (true){
    echo "<br> {$b}";
    $b++;
    if ($b > $a) {
        echo "BREAK";
        break;
    }
}

// Пропуск итерации

$n = 10;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        echo "<p style='color: red'>{$i}</p>";
        continue;
    }
    echo "<br> $i";
}

// Массивы
$arr = [];
$somevar = true;
$arr[] = 1;
$arr[] = "Hello, world!";
$arr[] = $somevar;
var_dump($arr);
var_dump(isset($arr['1']));
echo $arr[1];

// Цикл for при работе с ассоциативными массивом
for ($i = 0; $i < count($arr); $i++) {
    echo "<br>{$arr[$i]}";
}

// Цикл foreach при работе с массивом
foreach ($arr as $key => $value) {
    echo "<br>{$key} => {$value}";
}

$users = [
    'name' => 'Alex',
    'role1' => [
        'admin',
        'user',
        'editor'
    ],
    'email' => 'alex@example.com',
    'role2' => [
        'admin',
        'user',
        'editor'
    ]
];

var_dump($users);

foreach ($users as $key => $value) {

    if (is_array($value)){
        echo "<br> &nbsp; {$key} => ";
        foreach ($value as $intkey => $intvalue) {

            echo "<br> &nbsp; &nbsp; {$intkey} ==> {$intvalue}";
        }
    } else {
        echo "<br>{$key} => {$value}";
    }

}

echo count($users);

$usersString = implode(';', $arr);
echo($usersString);