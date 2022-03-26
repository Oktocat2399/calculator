<?php

function sign_proof($sign,$string,$params)
{
    $a = explode($sign, $string);
    if (count($a)>1) {
        return $params($a[0], $a[1]);
    }
    else {
        return false;
    }
}

function calculator($string)
{
    $signs = [
        "+" => fn($a, $b) => $a + $b,
        "-" => fn($a, $b) => $a - $b,
        "*" => fn($a, $b) => $a * $b,
        "/" => fn($a, $b) => $a / $b,
    ];
    foreach ($signs as $key => $value){
        $a = sign_proof($key, $string, $value);
        if($a) echo $a;
    }
}