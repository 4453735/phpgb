<?php

function sum($x, $y) {
    $result = $x + $y;
    return $result;
}

function difference($x, $y) {
    $result = $x - $y;
    return $result;
}

function multiplication($x, $y) {
    $result = $x * $y;
    return $result;
}

function division($x, $y) {
    $result = ($y != 0) ? $x / $y : "На ноль делить нельзя";
    return $result;
}

$result = '';
$x = '';
$y = '';
if (!empty($_POST)) {
    $x = (int)$_POST['operand1'];
    $y = (int)$_POST['operand2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case "+":
            $result = sum($x, $y);
            break;
        case "-":
            $result = difference($x, $y);
            break;
        case "*":
            $result = multiplication($x, $y);
            break;
        case "/":
            $result = division($x, $y);
            break;
    }
}
?>
<form action="" method="post">
    <input type="text" name="operand1" value="<?=$x?>">
    <select name="operation" id="">
        <?php if(!empty($_POST['operation'])): ?>
        <option selected><?=$_POST['operation']?></option>
        <?php endif; ?>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="operand2" value="<?=$y?>">
    =
    <input type="text" name="result" value="<?=$result?>">
    <button type="submit">Вычислить</button>
</form>
