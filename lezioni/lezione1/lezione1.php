<?php
/**
 * prima lezione di php
 */

//commento questa istruzione
echo "lavoriamo con php";
echo PHP_EOL;

#commento altra riga
echo "seconda riga";

//le variabili
$intero = 10;
// $1intero = 5; non deve iniziare con un numero
$id_cliente = 15; //snake_case
$idCliente = 15; //camelCase

/*
Variabili: snake_case o camelCase
 Nomi di oggetto: PascalCase (DatiPersonali)
 Url: kebab-case htpps://miosito.it/lista-prodotti
*/
    
//@ davanti ad una istruzione evita di "stampare" l'errore
//echo @$idcliente;
echo PHP_EOL;
echo $idCliente;

//eseguire una istruzione da riga comando
//php -r "echo 'ciao'; " 

/**
 * $argc = numero dei parametri ricevuti
 * $argv = valore dei parametri ricevuti
 */
echo PHP_EOL;
print_r($argc);
print_r($argv);

//echo e print differenze
echo PHP_EOL;
print $idCliente;
echo PHP_EOL;
echo $idCliente, 10;

/**
 * tipi di variabile
 */
$i = 10; //intero
$f = .5; //float
$s = "ciao"; //stringa
$b = true; //booleano
$ar = Array(); //Array
$ar = []; //Array
$n = null; //valore nullo
$o = new stdClass; //oggetto

$i = "ciao"; //è possibile ridefinire una variabile con un tipo diverso

/**
 * boolean true == 1 == 1 && 1 == 1 || 0
 * boolean false == 0 == 0 || 0 == 0 && 0 == 1 && 0
 */

 /**
  * interi
  */
  print PHP_EOL;
  print PHP_INT_MIN;
  print PHP_EOL;
  print PHP_INT_MAX;

  /**
   * float la virgola è il .
   */
  $f1 = 30.5;

  /*
  * if () { //// }else{ ///// }
   */
print PHP_EOL;
$f = 1 - .42; //0.580?????0001
//f: 0.58 - f1:0.58 -- f e f1 sono diversi

//uso bcadd
//$f = bcadd(1, -0.42, 2);
//f: 0.58 - f1:0.58 -- f e f1 sono uguali

$f1 = 0.58;
print "f: $f - f1:$f1";
print PHP_EOL;
if ($f == $f1) {
    print "A. f e f1 sono uguali";
}else{
    print "A. f e f1 sono diversi";
}
print PHP_EOL;
if (bccomp($f, $f1, 2) == 0 ) {
    print "B. f e f1 sono uguali";
}else{
    print "B. f e f1 sono diversi";
}
// BCMath bcadd bccomp

/**
 * stringhe
 * . = concatenazione di una stringa
 */
print PHP_EOL;
//$str = "I valori delle variabili sono: \nf: " . $f . " \nf1: " . $f1;
//$str = 'I valori delle variabili sono: ' . PHP_EOL . 'f: ' . $f . ' ' . PHP_EOL . 'f1: ' . $f1;
$str= "I valori delle variabili sono \nf: {$f} \nf1: {$f1}";
//$str= 'I valori delle variabili sono \nf: {$f} \nf1: {$f1}'; //stamperebbe una stringa senza includere caratteri speciali e variabili
print $str;

/*create 2 variabili
$op1 di tipo intero
$str1 di tipo stringa

assegnate ad $op1 valore 105
assegnate ad $str1 valore 'siamo a lezione di PHP'

create una variabile $strOut con valore 'un piccolo esempio per le variabili, allego valori: '
concatenate o inserite all'interno della $strOut il nome e valore delle 2 variabili

stampate a video la variabile $strOut
*/
$op1 = 105;
$str1 = 'siamo a lezione di PHP';

$strOut = "un piccolo esempio per le variabili, allego valori: \nop1:$op1 \nstr1:$str1";
print $strOut;