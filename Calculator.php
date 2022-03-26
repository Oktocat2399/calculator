<?php

$array = [
    [1,2,3,4], //10
    [4,5,6,7,1,2,4], //29
    [8,6,5], //19
];
$a = $array[0];
echo "sum(a)=" . array_sum($a);


function params_sign($sign, $string, $f)
{
    $a = explode($sign, $string);
    if (count($a) > 1) {
        return $f($a[0], $a[1]);
    } else {
        return false;
    }
}

function calculator(string $string)
{
    $signs = [
        "+" => fn($a, $b) => $a + $b,
        "-" => fn($a, $b) => $a - $b,
        "*" => fn($a, $b) => $a * $b,
        "/" => fn($a, $b) => $a / $b,
    ];
    foreach ($signs as $key => $value) {
        $a = params_sign($key, $string, $value);
        if ($a !== false) return $a;
    }
    return false;
}



$data_string = file_get_contents('data.json');
$data = json_decode($data_string);
$results = [];
foreach ($data as $value) {
    $c = calculator($value);
    $results[] = $value . '=' . $c ;
}
$result = json_encode($results);
file_put_contents('result.json', $result );

