<?php
//estrarre con array slice solamente il 2 e 3 elemento dell'array
$ar = [
    "primo" => 1,
    "secondo" => 2,
    "terzo" => 3,
];

print_r (array_slice($ar, 1,2));

// Array
// (
//     [secondo] => 2
//     [terzo] => 3
// )