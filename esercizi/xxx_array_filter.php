<?php
//filtrare in un array solamente gli elementi che sono maggiori di 10 tramite array_filter

$ar = [1,20,14,10,25,18,6,8,5,22,30,14,9,2];

$ar2 = array_filter($ar, function($item){
    return $item > 10;
});
print_r($ar2);

// Array
// (
//     [1] => 20
//     [2] => 14
//     [4] => 25
//     [5] => 18
//     [9] => 22
//     [10] => 30
//     [11] => 14
// )