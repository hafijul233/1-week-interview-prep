<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {

    sort($arr);

    $maxArray = $arr ?? [];

    $minArray = $arr ?? [];

    $temp = array_pop($minArray);

    $temp = array_shift($maxArray);

    echo array_sum($minArray) . ' ' . array_sum($maxArray);
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
