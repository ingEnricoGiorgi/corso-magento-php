<?php
//rilevare gli elementi del 1 array non presenti nel 2 array
$ar = [
    "primo" => 1,
    "secondo" => 2,
    "terzo" => 3,
];
$ar2 = [
    "primo" => 1,
    "secondo" => 2,
];
print_r (array_diff($ar, $ar2));

// Array
// (
//     [terzo] => 3
// )