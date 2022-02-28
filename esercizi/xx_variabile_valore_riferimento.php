<?php
// creare un esempio di una variabile passata per valore e per riferimento ad una funzione e dimostrarne la differenza

$v = 10;
function miaF ($param){
    $param++;
}
miaF($v);
print "passata per valore: $v";
print PHP_EOL;
$v1 = 10;
function miaFRef(&$param){
    $param++;
}
miaFRef($v1);
print "passata per riferimento: $v1";