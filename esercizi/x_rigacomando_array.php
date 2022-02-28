<?php 
// richiamare lo script php con 1 parametri (nome)
// definire l'array della Marvel
// stampare a video il dato richiesto nella modalità:
// l'arma di xxxxxxx è yyyyyyy
// utilizzare per i parametri $argc / $argv
// non considerare il test se esiste o non esiste il personaggio

    $arMarvel = [
        'iron man' => ['name' => 'Tony Stark', 'arma' => 'armatura potente'],
        'capitan america' => ['name' => 'Steve Rogers', 'arma' => 'scudo'],
        'vedova nera' => ['name' => 'Natasha Romanov', 'arma' => 'arti marziali'],
        'arrow' => ['name' => 'Clint Barton', 'arma' => 'arti marziali + arco'],
        'thor' => ['name' => 'Thor Odinson', 'arma' => 'martello']
    ]; 

if ($argc <= 1) {
    print "non sono stati passati sufficienti argomenti";
} else {
    print "l'arma di {$arMarvel[$argv[1]]['name']} è {$arMarvel[$argv[1]]['arma']}";
}