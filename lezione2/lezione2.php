<?php
$arDisney=['pippo','pluto','paperino','paperone','topolino'];

print_r($arDisney);//stampo arrray
print $arDisney[1];//stampo singolo


//array testuale, associativo
 $arMarvel=[
 'iron man'=>'Tony Stark',
 'capitan america'=>'Steve rodgers',
 'vedova nera'=>'Natasha Romanoff',
 'arrow'=>'Clint'
 ];
print $arMarvel['iron man'];

$arMarvel=[
'iron man'=>['name' =>'Tony Stark', 'arma' => 'armatura potente'],
'capitan america'=>['name' =>'Steve rodgers', 'arma' => 'scudo'],
'vedova nera'=>['name' =>'Natash romanoff', 'arma' => 'arte marziale potente'],
'arrow'=>['name' =>'Clint burton', 'arma' => 'arco'],
];
print $arMarvel['iron man']['arma'];
//print_r($arMarvel."\n");//stampo arrray
//print json_encode($arMarvel);
//php lezione2.php 'iron man' <- da riga di comando
if($argc <= 1){
    print"non sono stati passati sufficienti argomenti";
}else {
    $personaggio=$argv[1];
    $nome = $arMarvel[$personaggio]['name'];
    $arma = $arMarvel[$personaggio]['arma'];
    print "l'arma di {$nome} detto {$personaggio} è {$arma}"; 
}
/*
//esercizio 2
//valorizzare un array nominato $servizi con 3 elementi ciascuno formato da un array
//ogni elemento avrà gli indici:nome, icona (font awesome), descrizione
//visualizzare i servizi 3 colonne su desktop / 1 colonna su mobile  
*/
$servizi=[
    'servizio1'=>['nome' =>'nomeservizio1', 'icona(font awesome)' => 'iconaservizio1', 'descrizione' => 'descrizioneservizio1'],
    'servizio2'=>['nome' =>'nomeservizio2', 'icona(font awesome)' => 'iconaservizio2', 'descrizione' => 'descrizioneservizio2'],
    'servizio3'=>['nome' =>'nomeservizio3', 'icona(font awesome)' => 'iconaservizio3', 'descrizione' => 'descrizioneservizio3']

];



?>