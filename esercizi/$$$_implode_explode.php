<?php
/**
 * fare dei test utilizzando implode, explode
 */
$str="mia stringa di test";

print_r(
    explode(' ',$str)
);
print PHP_EOL;

print implode(
    '-',
    [
        0 => 'primo',
        1 => 'secondo',
        2 => 'terzo',
    ]
);
/*
Array
(
    [0] => mia
    [1] => stringa
    [2] => di
    [3] => test
)

primo-secondo-terzo
 */