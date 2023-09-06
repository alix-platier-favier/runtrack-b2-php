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

    $number1 = 37;
    $isPrime1 = my_is_prime($number1);

    if ($isPrime1) {
        echo "$number1 is a prime number<br>";
    } else {
        echo "$number1 isn't a prime number<br>";
    }


?>
