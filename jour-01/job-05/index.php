<?php

function my_is_prime(int $number): bool {
    if ($number <= 1) {
        return false;
    }

    if ($number === 2) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }

    for ($i = 3; $i <= $number / 2; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$number1 = 3;
$isPrime1 = my_is_prime($number1);

$number2 = 12;
$isPrime2 = my_is_prime($number2);

$result1 = $isPrime1 ? 'true' : 'false';
$result2 = $isPrime2 ? 'true' : 'false';

echo "my_is_prime($number1) === $result1;<br>";
echo "my_is_prime($number2) === $result2;<br>";

?>
