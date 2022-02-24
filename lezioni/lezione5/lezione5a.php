<?php 

function scriviTitolo($titolo){
    print PHP_EOL . str_repeat("*", 10) . " " .  $titolo . " " . str_repeat("*",10) . PHP_EOL;
} 
function funPrint($str, $label = null){
    print "$label: $str" . PHP_EOL;
}

// $var = "123";
// //settype($var,'integer');
// unset($var);
// $ar = array(
//     "primo" => 123,
//     "secondo" => 321,
// );
// unset ($ar["primo"]);
// var_dump ($ar);
/*
array(1) {
  ["secondo"]=>
  int(321)
}
 */

scriviTitolo("Date & Time");
date_default_timezone_set('Europe/Rome');
echo date_default_timezone_get() . PHP_EOL;


// print time() . PHP_EOL;
// print strtotime("2021-02-24 12:05:05") . PHP_EOL;

// print "la data e ora attuale è " . time() . PHP_EOL;
// $timestampCorrente = time();
// $formato = "d/m/Y H:i:s";
// print "la data e ora attuale è " . date($formato, $timestampCorrente) . PHP_EOL;

// $dataUtente = "05/16/2022";
// print dataIta(strtotime($dataUtente)) . PHP_EOL;
// print dataRovesciata(strtotime($dataUtente)) . PHP_EOL;

// function dataIta($timestamp){
//     return date("d/m/Y", $timestamp);
// }

// function dataRovesciata($timestamp){
//     return date("Y-m-d", $timestamp);
// }
// print PHP_EOL;
// $date=date_create("2021-03-15");
// echo date_format($date,"Y/m/d");
// var_dump($date);

//print mktime(11,8,25,2,24,2022);

scriviTitolo("Array");
$ar = [1,3,5,4,2,6];
// funPrint (count($ar), "n.") ;
// funPrint (count($ar)) ;

// funPrint( in_array(5,$ar) ? "l'elemento esiste" : "l'elemento non esiste");

// if (in_array(5,$ar)){
//     funPrint ("l'elemento esiste"); 
// }else{
//     funPrint ("l'elemento non esiste"); 
// }

// funPrint(false, 'il valore è falso');

print_r($ar);
// shuffle($ar);
// print_r($ar);
// asort($ar); //ordinamento crescente
// print_r($ar);
// arsort($ar); //ordinamento decrescente
// print_r($ar);

//print_r(array_reverse($ar));

$ar2 = [10,12,15,14,18];

$ar3 = array_merge($ar, $ar2);

print_r($ar3);

print PHP_EOL;
print sprintf("il dato inserito dall'utente %s è: %d", "Mario Rossi", 155);
print PHP_EOL;
printf("il dato inserito dall'utente %s è: %d", "Mario Rossi", 155);

print_r( array_slice($ar3,3,4)); //restituisce una parte di array
/*
(
    [0] => 4
    [1] => 2
    [2] => 6
    [3] => 10
)
 */

 print_r( array_chunk($ar3, 3)); //divide l'array in parti con il medesimo numero di elementi

 print_r( array_diff($ar3, $ar2));

 $ar4 = array_fill(10, 5, "ciao");
 print_r($ar4);