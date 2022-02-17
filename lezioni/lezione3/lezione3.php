<?php
// $ar = ['nome' => 'Mario', 'cognome' => 'Rossi'];
// //print_r($ar);
// // print $ar['nome'];

// // define('NUM_PAG', 9);
// // echo "la costante NUM_PAG: ", defined('NUM_PAGINA');

// // print_r (get_defined_constants() );
// // print_r (get_defined_vars() );

// $risultato = 10 % 3;
// print $risultato;

// $risultato = 0;
// $risultato1 = 5;
// function sommaTotale($operando){
//     // global $risultato; //scope globale
//     // $risultato += $operando;
//     $GLOBALS['risultato'] += $operando;
// }
// function sommaTotale1($operando){
//     // global $risultato; //scope globale
//     // $risultato += $operando;
//     $GLOBALS['risultato'] += $operando;
// }

// sommaTotale(5);
// sommaTotale(8);
// sommaTotale(4);
// sommaTotale(2);
// sommaTotale1(10);
// // print_r($GLOBALS);
// print $risultato;

// $messaggio = "messaggio iniziale";
// // $messaggio = $messaggio . " seconda parte";
// //$messaggio = $messaggio . " seconda parte"; uguale a $messaggio .= " seconda parte";
// $messaggio .= " seconda parte";
// print $messaggio;

//creare una funzione nominata concatena che utilizzando una variabile globale nominata
//lista aggiunge diverse stringhe di testo 
//-primo messaggio
//-secondo messaggio
//-terzo messaggio
//-quarto messaggio
//-quinto messaggio
//-fine
//alla fine stampare la stringa completa

print "******* operatori incremento / decremento \n" ;
$conta = 5;
$conta1 = 5;

stampaVariabile ("conta", $conta++, __LINE__); //stamperà 5
stampaVariabile ("conta", $conta, __LINE__); //stamperà 6
stampaVariabile ("conta1", ++$conta1, __LINE__); //stamperà 6
stampaVariabile ("conta1", $conta1, __LINE__); //stamperà 6
// $v = 15;
// print $v++ . PHP_EOL;
// print "la variabile in questo punta vale $v" . PHP_EOL;

function stampaVariabile($nome, $valore, $riga){
    print "la variabile: $nome a riga: $riga ha valore: $valore" . PHP_EOL;
}

print "******* operatori logici \n" ;
// && = and
// || = or
// xor

//è fine anno e l'azienda intende assegnare un aumento e/o un premio
//l'aumento verrà dato a chi avrà fatturato + di 500.000 e avrà un numero di presenze > 170

//il premio verrà dato a chi avrà fatturato + di 300.000 oppure a chi avrà un numero di presenze > 150

//il contratto verrà rinnovato a chi avrà un numero di assenze > 50 oppure un numero di lamentele > 5 ma non entrambi 
//giorni totali possibili = 195
$arDipendenti = [
    ['name' => 'Marco', 'fatturato' => 550000, 'presenze' => 175, 'lamentele' => 2],
    ['name' => 'Silvia', 'fatturato' => 250000, 'presenze' => 140, 'lamentele' => 7],
    ['name' => 'Stefano', 'fatturato' => 300000, 'presenze' => 165, 'lamentele' => 3],
    ['name' => 'Gianni', 'fatturato' => 440000, 'presenze' => 165, 'lamentele' => 6],
    ['name' => 'Elisa', 'fatturato' => 200000, 'presenze' => 175, 'lamentele' => 3],
];

