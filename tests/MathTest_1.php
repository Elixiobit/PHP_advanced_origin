<?php
include "../services/Math.php";


$object = new \app\services\Math();
$errors = [];

/*
 * 1. Тип аргументов
 * 2. Возврат значения
 * 3. Корректного Типа
 * 4. Значение соотвествует ожидаемому
 */

$a = 5;
$b = 7;

$result = $object->summ($a, $b);
if(!is_int($result)) {
    $errors[] = "Ожидалось целое число";
}

if($result != 12) {
    $errors[] = "Неккоректный результат";
}

if(count($errors) > 0) {
    echo "test failed! \n";
    print_r($errors);
}   else {
    echo "test successful";
}