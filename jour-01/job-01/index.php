<?php

function my_str_search(string $needle, string $haystack): int {

    $count = 0;

    for ($i = 0; isset($haystack[$i]); $i++) {
        $char = $haystack[$i];
        if ($char == $needle) {
            $count++;
        }
    }

    return $count;
}

$haystack = 'La Plateforme';
$needle = 'a';

$n = my_str_search($needle, $haystack);

$result = "my_str_search('$haystack', '$needle') === $n;";
echo $result;
