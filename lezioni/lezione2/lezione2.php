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

//esercizio 2
//valorizzare un array nominato $servizi con 3 elementi ciascuno formato da un array
//ogni elemento avrà gli indici:nome, icona (font awesome), descrizione
//visualizzare i servizi 3 colonne su desktop / 1 colonna su mobile  


    print"<h2>Le Espressioni</h2>";

        // assegnazione =
        $risultato = 28 % 5; //modulo = il resto della divisione
        print "il risultato di 28 % 5 è:" . $risultato . "\n";
        if (6>5){
            print "l'espressione è maggiore \n";
        }
        print "\n";
        $a = 3;
        $b = 5;
        //sommare $b ad $a
        //$a = $a + $b; //modalità estesa
        //operatori combinati
        $a += $b;
        print "a ha valore: $a";
        print "\n";
        // . = operatore di contenazione delle stringhe
        print "primo " . " secondo " . $a . "\n"
    ?>
    <!-- Optional JavaScript; choose one of the two! -->
