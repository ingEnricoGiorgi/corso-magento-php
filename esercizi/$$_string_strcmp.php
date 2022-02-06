<?php
/**
 * fare dei test utilizzando strcmp
 */
$str = "mia stringa";
print strcmp($str, "mia stringa"); //0 uguali
print strcmp($str, "Mia stringa"); //1
print strcmp($str, "nia stringa"); //-1 
