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

// print "******* operatori incremento / decremento \n" ;
// $conta = 5;
// $conta1 = 5;

// stampaVariabile ("conta", $conta++, __LINE__); //stamperà 5
// stampaVariabile ("conta", $conta, __LINE__); //stamperà 6
// stampaVariabile ("conta1", ++$conta1, __LINE__); //stamperà 6
// stampaVariabile ("conta1", $conta1, __LINE__); //stamperà 6
// // $v = 15;
// // print $v++ . PHP_EOL;
// // print "la variabile in questo punta vale $v" . PHP_EOL;

// function stampaVariabile($nome, $valore, $riga){
//     print "la variabile: $nome a riga: $riga ha valore: $valore" . PHP_EOL;
// }

// print "******* operatori logici \n" ;
// && = and
// || = or
// xor

// if (! 5 > 2 ){
//     print "è vero";
// }else{
//     print "è falso";
// }

// //le variabili sono tutte true tranne:
// // ""           stringa vuota
// // 0            numero = 0
// // false        boolean = false
// // null         variabile null
// // []           array vuoto
// print PHP_EOL;
// dimmiSeVeroOFalso(0); //false
// dimmiSeVeroOFalso(1); //true
// dimmiSeVeroOFalso(2); //true
// dimmiSeVeroOFalso("ciao"); //true
// dimmiSeVeroOFalso(""); //false
// dimmiSeVeroOFalso([]); //false
// dimmiSeVeroOFalso([1,2,3]); //true
// dimmiSeVeroOFalso(null); //false

// function dimmiSeVeroOFalso($v1){
//     if ($v1) {
//         print serialize($v1).": vero";
//     }else{
//         print serialize($v1).": falso";
//     }
//     print PHP_EOL;
// }

print "******* operatori di confronto \n" ;
// ==   uguale      (verifica solo il valore)
// !=   diverso     (verifica solo il valore)
// ===  identico    (verifica sia il tipo che il valore)
// <>   diverso
// !==  non identico (verifica sia il tipo che il valore)
// >    maggiore
// <    minore
// >=   maggiore o uguale
// <=   minore o uguale
// <=>  comparazione    (vale 0 se uguale 1 se > il primo -1 se maggiore il secondo)

// print "il valore è " . (5 == 5) . PHP_EOL; //vero
// print "il valore è " . (5 == "5") . PHP_EOL;    //vero
// print "il valore è " . (5 === "5") . PHP_EOL;   //falso
// print "il valore è " . (5 === 5) . PHP_EOL;   //vero
// print "******" . PHP_EOL;
// print "il valore è " . (5 != 5) . PHP_EOL; //falso
// print "il valore è " . (5 != "5") . PHP_EOL;    //falso
// print "il valore è " . (5 !== "5") . PHP_EOL;   //vero
// print "il valore è " . (5 !== 5) . PHP_EOL;   //falso
// print "******" . PHP_EOL;
// print "il valore è " . (5 <=> 5) . PHP_EOL; //0
// print "il valore è " . (6 <=> 5) . PHP_EOL; //1
// print "il valore è " . (5 <=> 6) . PHP_EOL; //-1

// //necessito di registrare dei clienti
// //non posso accettare 2 clienti con lo stesso numero di iscrizione

// if (($numeroDiIscrizione1 <=> $numeroDiIscrizione2) === 0){
//     print "errore";
// }

// //numeri
// //maiuscole
// //minuscole
// print PHP_EOL;
// dimmiChiEMaggiore ("CIAO", "ciao"); //ciao
// dimmiChiEMaggiore ("Alfa", "beta"); //beta
// dimmiChiEMaggiore ("alfa", "ZARA"); //alfa
// dimmiChiEMaggiore ("012", "ZARA");
// dimmiChiEMaggiore ("012", "zara");
// dimmiChiEMaggiore ("012", "zara");
// dimmiChiEMaggiore ("AlFa", "ALFA"); //AlFa

// function dimmiChiEMaggiore($v1, $v2){
//     if ($v1 > $v2){
//         print "$v1 > $v2" . PHP_EOL;
//     }else{
//         print "$v2 > $v1" . PHP_EOL;
//     }
// }
// $a = 5;
// if ($a == 1){ //non fare MAI confronto con 1 solo = ($a = 1) //ERRORE GRAVE!!!
//     print "è 1";
// }
// print PHP_EOL;
// print $a;


// $a = 10;
// if ($a < 5){
//     print "a è < 5";
// }else{
//     if ($a == 5){
//         print "a è uguale 5";
//     }else{
//         if ($a > 10){
//             print "a è > 10";
//         }else{
//             print "a è > 5 e <= 10";
//         }    
//     }
// }
// print PHP_EOL;
// if ($a < 5){
//     print "a è < 5";
// }elseif ($a == 5){
//     print "a è uguale 5";
// }elseif ($a > 10){
//     print "a è > 10";
// }else{
//     print "a è > 5 e <= 10";
// }
// print PHP_EOL;
// switch (true){
//     case $a < 5:
//         print "a è < 5";
//         break;
//     case $a == 5:
//         print "a è == 5";
//         break;
//     case $a > 10:
//         print "a è >10";
//         break;
//     default:
//         print "a è > 5 e <= 10";
//         break;

// }
// print PHP_EOL;
// $dislocazione = 60;

// switch (true){
//     case $dislocazione == 15:
//     case $dislocazione == 1:
//     case $dislocazione == 10:
//     case $dislocazione == 25:
//     case $dislocazione == 8:
//         print "prodotto in offerta" . PHP_EOL;
//         break; //importante sempre prima del case sucessivo
//     case $dislocazione > 50 && $dislocazione < 100:
//         print "prodotto non vendibile" . PHP_EOL;
//         break; //importante sempre prima del case sucessivo
//     case $dislocazione >= 100 && $dislocazione <= 150:
//         print "prodotto in offerta a Natale" . PHP_EOL;
//         break; //importante sempre prima del case sucessivo
//     }

//     print "Luca" . "vuole" . "stampare";
//     print PHP_EOL;
//     echo "Luca" . "vuole" . "stampare";
//     print PHP_EOL;
//     echo "Luca", "vuole", "stampare";
    
//     $b=10;
//     print "************* op ternario ";
//     print PHP_EOL;
    
//     if ($b==10){
//         print "b è 10";
//     }else{
//         print "b diversa da 10";
//     }
//     print PHP_EOL;
//     ($b==10) ? print "b è 10" : print "b diversa da 10";
//     print PHP_EOL;
//     print ($b==10) ? "b è 10" : "b diversa da 10";
//     print PHP_EOL;

//     //($b==10) ? print "b è 10" : (($b>10) ? print "b è  > 10" : print "b diversa da 10");

//     $c = ($b > 10) ? $b : 15;
//     if ($b > 10){
//         $c = $b;
//     }else{
//         $c = 15;
//     }
    //$b = "ciao";
    // print "-----";
    // $c = $b ?? ''; //errore b non è definita
    // print $c;
    // print "-----";
    //if then else
    //()  ?   :
    //if + then  else
    //()           ?:   -> se è vero 
    //() ??             -> se esiste e != null
    
    //se b non esiste
    //$b = "aaa";
    //$c = $b ? $b : 'altro caso';
    //$c = $b ?? 'altro caso';
    // $c = $b ?? 'altro caso';
    // print $c;

    //caso 1 con isset e if estesa
    if (isset ($_GET["nome"])){
        $nome = $_GET["nome"]; 
    }else{
        $nome = "default"; 
    }
    //caso 2 con operatore colaesce
    $nome = $_GET["nome"] ?? "default";
    //caso 3 con opertore ternario
    $nome = (isset($_GET["nome"])) ? $_GET["nome"] : "default";