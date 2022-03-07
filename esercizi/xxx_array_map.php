<?php
    //sulla base di un array di array con nome e cognome mappare ogni elemento (array_map) ritornando 
    //un array con nome completo
    $ar=[
        ['nome' => 'Carlo', 'cognome' => 'Sanchi'],
        ['nome' => 'Silvia', 'cognome' => 'Bianchi'],
        ['nome' => 'Gianni', 'cognome' => 'Marini'],
        ['nome' => 'Marco', 'cognome' => 'Luppi'],
        ['nome' => 'Simona', 'cognome' => 'Ganti'],
        ['nome' => 'Chiara', 'cognome' => 'Pani'],
    ];


    $newAr = array_map(function($v){
        return $v['fullname'] = "{$v['nome']} {$v['cognome']}";
    },$ar);
    print_r($newAr);

    /*
    Array
(
    [0] => Carlo Sanchi
    [1] => Silvia Bianchi
    [2] => Gianni Marini
    [3] => Marco Luppi
    [4] => Simona Ganti
    [5] => Chiara Pani
)
    */

 