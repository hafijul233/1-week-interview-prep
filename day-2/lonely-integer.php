<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    $report = [];

    array_walk($a, function ($value, $key) use(&$report) {
        if(isset($report[$value])) {
            $report[$value]++;
        } else {
            $report[$value] = 1;
        }
    });

    foreach($report as $value => $count) {
        if($count === 1)
            return $value;
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
