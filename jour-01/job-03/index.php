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

if ($isMultiple1) {
    echo "$number1 is a multiple of $multiple1.<br>";
} else {
    echo "$number1 isn't a multiple of $multiple1.<br>";
}

if ($isMultiple2) {
    echo "$number2 is a multiple of  $multiple2.<br>";
} else {
    echo "$number2 is not a multiple of $multiple2.<br>";
}

?>
