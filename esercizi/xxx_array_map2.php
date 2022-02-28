<?php
//elevare al quadrato tutti gli elementi di un array

$ar = [1,20,14,10,25,18];

$ar2 = array_map(function($item){
    return $item ** 2;
}, $ar);
print_r($ar2);

// Array
// (
//     [0] => 1
//     [1] => 400
//     [2] => 196
//     [3] => 100
//     [4] => 625
//     [5] => 324
// )