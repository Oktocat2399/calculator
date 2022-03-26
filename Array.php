<?php
$array = [
    [1, 2, 3, 4], //10
    [4, 5, 6, 7, 1, 2, 4], //29
    [8, 6, 5], //19
];
//$result = [10,29,19];

$results = [];



foreach ($array as $value) {
    $sum = 0;
    //echo "before foreach, sum = $sum\n";

    foreach ($value as $param) {
        //echo "in foreach, sum = $sum, param = $param\n";
        $sum = $sum + $param;
    }

    //echo "after foreach, sum = $sum\n";
    $results [] = $sum;
}
var_dump($results);