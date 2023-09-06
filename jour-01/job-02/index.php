<?php

function my_str_reverse(string $string): string {
    $reverse = '';
    $i = 0;
    
    while (!empty($string[$i])) { 
        $reverse = $string[$i] . $reverse; 
        $i++;
    }

    return $reverse;
}

$inputString = 'Hello';
$reversedString = my_str_reverse($inputString);
echo $reversedString;

?>