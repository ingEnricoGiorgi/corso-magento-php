<?php
// dato un array filtrare con array_filter solamente i valori superiori a 10
$ar=[5,8,12,9,14,20,3,8,12,14,9,6,25];
print_r(array_filter($ar, function($v){
    return $v>10;
}));