<?php 
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