<?php
/**
 * definire una variabile fuori dalla funzione e stampare tramite array $GLOBALS
 */

$var = 123;
function mia_func(){
    print $GLOBALS['var'];
}
mia_func();