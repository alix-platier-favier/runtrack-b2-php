<?php

function my_is_multiple(int $number, int $multiple): bool {
    if ($multiple === 0) {
        return false;
    }
    return $number % $multiple === 0;
}

$number1 = 10;
$multiple1 = 2;
$isMultiple1 = my_is_multiple($number1, $multiple1);

$number2 = 15;
$multiple2 = 7;
$isMultiple2 = my_is_multiple($number2, $multiple2);

$result1 = $isMultiple1 ? 'true' : 'false';
$result2 = $isMultiple2 ? 'true' : 'false';

echo "my_is_multiple($number1, $multiple1) === $result1;<br>";
echo "my_is_multiple($number2, $multiple2) === $result2;<br>";

?>
