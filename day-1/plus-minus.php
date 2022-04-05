<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $statics = [
        'counter' => 0,
        'plus' => 0,
        'minus' => 0,
        'zero' => 0
    ];
    array_walk($arr, function(&$element, $key) use(&$statics) {
        $statics['counter']++;
        switch($element <=> 0) {
            case -1 :$statics['minus']++; break;
            case 0 : $statics['zero']++; break;
            case  1 : $statics['plus']++; break;
            default: break;
        }
    }, $statics);

    //print_r($statics);

    printf("%0.6f\n", ($statics['plus']/$statics['counter']));
    printf("%0.6f\n", ($statics['minus']/$statics['counter']));
    printf("%0.6f", ($statics['zero']/$statics['counter']));
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
