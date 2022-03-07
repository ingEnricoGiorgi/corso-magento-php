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
// $ar = [1,3,5,4,2,6];
// funPrint (count($ar), "n.") ;
// funPrint (count($ar)) ;

// funPrint( in_array(5,$ar) ? "l'elemento esiste" : "l'elemento non esiste");

// if (in_array(5,$ar)){
//     funPrint ("l'elemento esiste"); 
// }else{
//     funPrint ("l'elemento non esiste"); 
// }

// funPrint(false, 'il valore è falso');

// print_r($ar);
// shuffle($ar);
// print_r($ar);
// asort($ar); //ordinamento crescente
// print_r($ar);
// arsort($ar); //ordinamento decrescente
// print_r($ar);

//print_r(array_reverse($ar));

// $ar2 = [10,12,15,14,18];

// $ar3 = array_merge($ar, $ar2);

// print_r($ar3);

// print PHP_EOL;
// print sprintf("il dato inserito dall'utente %s è: %d", "Mario Rossi", 155);
// print PHP_EOL;
// printf("il dato inserito dall'utente %s è: %d", "Mario Rossi", 155);

// print_r( array_slice($ar3,3,4)); //restituisce una parte di array
/*
(
    [0] => 4
    [1] => 2
    [2] => 6
    [3] => 10
)
 */

//  print_r( array_chunk($ar3, 3)); //divide l'array in parti con il medesimo numero di elementi

//  print_r( array_diff($ar3, $ar2));

//  $ar4 = array_fill(10, 5, "ciao");
 //print_r($ar4);

//  $ar5 = array_intersect([1,3,5,6,2],[2,4,8,9]);
//  print_r($ar5);

// $ar6 = [
//     "primo" => 1,
//     "secondo" => 2,
//     "terzo" => 3,
//     "quarto" => 4,
// ];

// funPrint( array_key_exists("quinto", $ar6) ? 'la chiave esiste' : 'la chiave non esiste' );

// $arNomi = ["gianni", "carlo", "francesco", "silvia", "sara"];
// $arNomiUCFirst = array_map("primaLetteraMaiuscola", $arNomi);

// //$arNomiUCFirst = array_map(callback, $arNomi);

// print_r($arNomiUCFirst);

// function primaLetteraMaiuscola($elemento){
//     return ucfirst($elemento);
// }

// scriviTitolo("Closure");
// $arNomiUCFirst2 = array_map(function ($elemento){
//     return ucfirst($elemento);
// }, $arNomi);
// print_r($arNomiUCFirst2);

// $ar7 = array(1,2,5,8,9);
// $moltiplicatore = 3;
// $ar8 = array_map(function($elemento) use($moltiplicatore){
//     return $elemento * $moltiplicatore;
// },$ar7);
// print_r($ar8);

// $miaF = function ($str){
//     printf("il parametro passato %s",$str);
// };

// $miaF("ciao");
// $miaF("gatto");

$ar = [1,5,8,4,2];
funPrint(array_pop($ar));
print_r($ar);

$ar[]=15;
array_push($ar, 12);
print_r($ar);

$ar10 = array_replace($ar, [2,8,20]);
print_r($ar10);

$arAss = [
    'a' => 'ciao1',
    'b' => 'ciao2',
    'c' => 'ciao3',
];
$arAss2 = array_replace($arAss, ['c' => 'ciao4']);
print_r($arAss2);

// Array
// (
//     [a] => ciao1
//     [b] => ciao2
//     [c] => ciao4
// )

print array_search("ciao2", $arAss); //cerca nei valori

$ar11 = [2,5,7,9];
print array_shift($ar11);
print_r($ar11);

// 2
// Array
// (
//     [0] => 5
//     [1] => 7
//     [2] => 9
// )

$ar11[] = 10;
array_push($ar11, 10);
print_r($ar11);
$ar12 = array_unique($ar11);
print_r($ar12);

list($a, $b, $c, $d) = $ar12;
print " a: $a \n b: $b \n c: $c \n d: $d \n";

$arAss3 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e' => 5,
];

print_r(array_keys($arAss3));
// Array
// (
//     [0] => a
//     [1] => b
//     [2] => c
//     [3] => d
//     [4] => e
// )

print_r(array_values($arAss3));
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
// )

$user = "mauro";
$password = "mauropwd";

$user = "' or '1' = '1";
$password = "' or '1' = '1";
//$sql ="SELECT * FROM users WHERE name='' or '1' = '1' AND password='' or '1' = '1'";

$user = htmlspecialchars($user, ENT_QUOTES);
$password = htmlspecialchars($password, ENT_QUOTES);

$sql ="SELECT * FROM users WHERE name='$user' AND password='$password'"; //è una modalità vecchia di operare !!! solo come esempio
print $sql;

