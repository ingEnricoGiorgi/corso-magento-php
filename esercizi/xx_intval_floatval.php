<?php
/**
 * utilizzare floatval e intval su di una variabile, stampare il tipo della variabile precedente e successivo con il valore della variabile
 */

 $var1 = "10.5";
 $var2 = "11 elementi";

 print "$var1:" . gettype($var1) .PHP_EOL;
 print "$var2:" . gettype($var2) .PHP_EOL;

 $var1 = floatval($var1); 
 $var2 = intval($var2); 
 print "$var1:" . gettype($var1) .PHP_EOL;
 print "$var2:" . gettype($var2) .PHP_EOL;

 /*
10.5:string
11 elementi:string
10.5:double
11:integer
 */