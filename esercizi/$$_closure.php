<?php
/**
 * creare una closure che stampa una stringa utilizzando una variabile ricevuta in input
 */

$var = function($miaStr) {
    return 'Sono una ' . $miaStr;
  };
  print_r($var('Closure'));