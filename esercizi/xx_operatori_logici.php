<?php 
//è fine anno e l'azienda intende assegnare un aumento e/o un premio
//l'aumento verrà dato a chi avrà fatturato + di 500.000 e avrà un numero di presenze > 170

//il premio verrà dato a chi avrà fatturato + di 300.000 oppure a chi avrà un numero di presenze > 150

//il contratto NON verrà rinnovato a chi avrà un numero di assenze > 50 e un numero di lamentele > 5 
//giorni totali possibili = 195

$arDipendenti = [
    ['name' => 'Marco', 'fatturato' => 550000, 'presenze' => 175, 'lamentele' => 2],
    ['name' => 'Silvia', 'fatturato' => 250000, 'presenze' => 140, 'lamentele' => 7],
    ['name' => 'Stefano', 'fatturato' => 300000, 'presenze' => 165, 'lamentele' => 3],
    ['name' => 'Gianni', 'fatturato' => 440000, 'presenze' => 165, 'lamentele' => 6],
    ['name' => 'Elisa', 'fatturato' => 200000, 'presenze' => 175, 'lamentele' => 3],
];
verificaDipendente($arDipendenti[0]);
verificaDipendente($arDipendenti[1]);
verificaDipendente($arDipendenti[2]);
verificaDipendente($arDipendenti[3]);
verificaDipendente($arDipendenti[4]);
function verificaDipendente($elemento){
    //&& aumento
    if ($elemento['fatturato'] > 500000 && $elemento['presenze'] > 170){
        print "{$elemento['name']} ha diritto all'aumento". PHP_EOL;
    }
    //|| premio
    if ($elemento['fatturato'] > 300000 || $elemento['presenze'] > 150){
        print "{$elemento['name']} ha diritto al premio". PHP_EOL;
    }
    //xor contratto
    $assenze = 195 - $elemento['presenze'];
    if ($assenze > 50 && $elemento['lamentele'] > 5){
        print "{$elemento['name']} non ha diritto al rinnovo". PHP_EOL;
    }
}

print __LINE__ . ":" . (false xor false) . PHP_EOL; //false
print __LINE__ . ":" . (true xor false) . PHP_EOL; //true
print __LINE__ . ":" . (false xor true) . PHP_EOL; //true
print __LINE__ . ":" . (true xor true) . PHP_EOL; //false