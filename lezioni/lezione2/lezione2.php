<?php 
    //array ad indici
    $arDisney = [
        'pippo', 'pluto', 'paperino', 'paperone', 'topolino'
    ];

    $arDisney[1] = 'qui quo qua'; //sostituire il valore
    
    print_r($arDisney); //stampare tutto l'array
    print $arDisney[1]; // stampare il valore di un indice

    //array associativo: la chiave può essere testuale
    print PHP_EOL;
    print "**** Marvel ****" . PHP_EOL ;
    $arMarvel = [
        'iron man' => ['name' => 'Tony Stark', 'arma' => 'armatura potente'],
        'capitan america' => ['name' => 'Steve Rogers', 'arma' => 'scudo'],
        'vedova nera' => ['name' => 'Natasha Romanov', 'arma' => 'arti marziali'],
        'arrow' => ['name' => 'Clint Barton', 'arma' => 'arti marziali + arco'],
        'thor' => ['name' => 'Thor Odinson', 'arma' => 'martello']
    ]; 
    print $arMarvel['iron man']['arma'];
// richiamare lo script php con 1 parametri (nome)
// definire l'array della Marvel
// stampare a video il dato richiesto nella modalità:
// l'arma di xxxxxxx è yyyyyyy
// utilizzare per i parametri $argc / $argv