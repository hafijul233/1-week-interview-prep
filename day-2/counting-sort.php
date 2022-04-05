<?php

/*
 * Complete the 'countingSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function countingSort($arr, $n) {
    // Write your code here
    $freqArray = array_fill(0, 100, 0);

    foreach($arr as $item){
        $freqArray[$item]++;
    }

    var_dump($freqArray);

    return $freqArray;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr, $n);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
