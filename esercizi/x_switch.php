<?php
//creare un algoritmo che data una variabile in input tramite istruzione switch ne identifichi il tipo e lo stampi a video
$input = "test"; 
$type = null;
switch (true){
    case is_string($input):
        $type = 'stringa';
        break;
    case is_int($input):
        $type = 'int';
        break;
    case is_bool($input):
        $type = 'bool';
        break;
    case is_array($input):
        $type = 'array';
        break;
    case is_float($input):
        $type = 'float';
        break;
    default:
        $type = 'non identificato';
        break;
}
$inputToPrint = (is_array($input) || is_object($input)) ? json_encode($input) : $input;
print "l'input " . $inputToPrint . " è $type";