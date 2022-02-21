<?php

// function ciclo_for($start, $end){
//     for ($i = $start; $i <= $end; $i++){
//         print "sono dentro al ciclo for: $i \n";
//     }
// }

// function ciclo_while($start, $end){
//     $i = $start;
//     while ($i <= $end){
//         print "sono dentro al ciclo while: $i \n";
//         $i++;
//     }
// }

// function ciclo_do_while($start, $end){
//     $i = $start;
//     do {
//         print "sono dentro al ciclo do while: $i \n";
//         $i++;
//     } while ($i <= $end);
// }
// if (isset($argv[1]) &&  isset($argv[2])){
//     ciclo_for($argv[1], $argv[2]);
// }else{
//     print "devi inserire gli argomenti start e end";
// }
// if (isset($argv[3]) && isset($argv[4])){
//     ciclo_while($argv[3], $argv[4]);
//     ciclo_do_while($argv[3], $argv[4]);
// }else{
//     print "devi inserire gli argomenti start e end";
// }

// // $ar = [1,2,3,4];
// // $ar1 = Array(1,2,3,4);

// // print_r($ar);
// // print_r($ar1);

// // $ar = [1,2,3,4];
// // foreach ($ar as $item){
// //     print "sono dentro al ciclo foreach: $item \n";
// // }

// $ar = [
//     'primo' => 'Marco',
//     'secondo' => 'Silvia',
//     'terzo' => 'Stefano',
//     'quarto' => 'Gianni',
// ];
// $ar = array(
//     'primo' => 'Marco',
//     'secondo' => 'Silvia',
//     'terzo' => 'Stefano',
//     'quarto' => 'Gianni',
// );
// foreach ($ar as $key => $value){
//     print "sono dentro al ciclo foreach: chiave: $key | valore: $value \n";
// }

// print "********* variabili per valore o per riferimento";
// print PHP_EOL;

// $max = 10;
// function aumentaValore($num){
//     $num++;
// }
// // & = parametro / variabile passata per riferimento
// function aumentaValorexRiferimento(int &$num){
//     $num++;
// }

// aumentaValore($max);
// print $max; //10

// print PHP_EOL;
// aumentaValorexRiferimento($max);
// print $max; //11
// // $str = "ciao";
// // aumentaValorexRiferimento($str);

// print "***** break e continue ***** \n";

// $i = -1; 
// $end = 20;

// while ($i <= $end){
//     $i++;
//     if (
//         ($i >= 0 && $i <= 9) 
//         || 
//         ($i >= 16)
//         ){
//             continue;
//     }
//     print "dentro al while, sono al $i \n";
// }

// print PHP_EOL;
//$ar = ["aaa", [],  1, 2, 4, 5, "ciao", 8, 9, "prova"];
// foreach ($ar as $item){
//     if (! is_scalar($item)){
//         break;
//     }
//     print "dentro al foreach, sono al $item \n";
// }

// $ar = [1, null, 2, 4, 5, "ciao", 8, 9, "prova"];
// foreach ($ar as $item){
//     if (is_null($item)){
//         break;
//     }
//     print "dentro al foreach, sono al $item \n";
// }

// print "*** funzioni con le stringhe \n";

// //strlen = lunghezza di una stringa
// $str = "oggi è il 21 di febbraio";
// print "la stringa è lunga: " . strlen($str) . " \n";
// print "la stringa da 8 per 10 caratteri è:" . substr($str, 1, 10) . "\n";
// print "la parola 21 è presente n.:" . substr_count($str, "21") . " volte \n";
// print substr_replace($str,"22 di febbraio", 11) . "\n";
// // $str = substr_replace($str,"22 di febbraio", 11);
// print "il numero 21 inizia da: " . strpos($str, "21") . " \n";
// print strrev($str) . "\n";

// $str2 = str_replace("febbraio", "marzo", $str);
// print $str2. "\n";

// // $input_nominativo = "Dall'acqua Arnaldo";
// // $query = "INSERT INTO utenti (nominativo) VALUES ('$input_nominativo');";
// // print $query; //query restituisce errore 

// $input_nominativo = addslashes("Dall'acqua Arnaldo");
// $query = "INSERT INTO utenti (nominativo) VALUES ('$input_nominativo');";
// print $query . "\n";

// $campo_nominativo = stripslashes("Dall\'acqua Arnaldo");
// //senza il stripslashes mostra il carattere \       Dall\'acqua Arnaldo
// print $campo_nominativo . "\n"; //Dall'acqua Arnaldo

// print "\"dall'acqua\" \n";
// print chr(34) . "dall'acqua" . chr(34). "\n"; 

// print chr(64) . "\n";
// print chr(65) . "\n";

// $password = "arnaldo-22";
// $password_db = password_hash($password, PASSWORD_DEFAULT);
// print $password_db;

// // $input_password = "arnaldo.16";
//  $input_password = "arnaldo-21";

// print PHP_EOL;

// if (password_verify($input_password,$password_db)){ //corretto !!!
//     print "ok";
// }else{
//     print "errore";
// }
// die;
// print PHP_EOL;
// $str = "lunedì,martedì,mercoledì";
// $ar = explode(",", $str);
// print_r($ar); 
// print PHP_EOL;
// Array
// (
//     [0] => lunedì
//     [1] => martedì
//     [2] => mercoledì
// )
// $ar2 = ["aaa", "bbb", "ccc"];

// print $str2 = implode("-",$ar2); //lunedì-martedì-mercoledì
// print PHP_EOL;

// print strtoupper($str2);
// print PHP_EOL;

// $stringa = "  ciao  ";
// print "-$stringa-\n"; //-  ciao  -
// print "-" . trim($stringa) . "-\n"; //-ciao-

// print PHP_EOL;
// print sprintf("l'utente %s si è loggato numero: %d volte per un totale di secondi: %.2f ", "Mario Rossi", 15, 120.3698);
// //l'utente Mario Rossi si è loggato numero: 15 volte per un totale di secondi: 120.37
// print PHP_EOL;

// $stringa_con_html_entities = htmlentities("<script>alert('titolo principale')</script>");
// print html_entity_decode($stringa_con_html_entities);

// print "questa è una stringa \n che va su più righe";

// echo strftime('%B'); //February
// print PHP_EOL;
// setlocale(LC_ALL, 'it_IT', 'ita_ita');
// setlocale(LC_ALL, 'en_US', 'ita_ita');
// echo ucfirst(strftime('%B')); //Febbraio

// print str_pad("65789",12,"0",STR_PAD_LEFT);

// $cc = "65789";
// print PHP_EOL;
// for ($i = 0; $i < 12; $i++){
//     $cc ="0" . $cc;
//     if (strlen($cc)>=12) break;
// }
// print $cc;

// print_r(str_split("ciao a tutti",3));

// $messaggio = "<strong>ciao a tutti</strong><p>questo ok</p><script>alert('fregato!!')</script>";
// print strip_tags($messaggio,"<p><strong>");

// $ar = [5,8,90,45,22,100];
// print max($ar); //100
// print PHP_EOL;

// print rand(); //numero intero casuale
// print PHP_EOL;
// print rand(1,100); //numero intero casuale
// print PHP_EOL;

// print round(10.25589, 2);

/*creare un form che:
    1. presenti 2 parametri: minimo e massimo (input number)
    2. alla pressione del submit riceva i due parametri
    3. controlli i 2 parametri grazie a filter_var($parametro1, FILTER_SANITIZE_NUMBER_INT);
    4. se i parametri non sono numerici o > 0 presentare errore tramite alert di bootstrap
    4a. se il 1 parametro è > o = al secondo presentare errore
    5. se tutto ok creare un numero random compreso tra i 2 paramentri 
    6. ripresentare sotto al numero random il medesimo form "pronto" per ricalcolare un altro numero random

    */
    
?>