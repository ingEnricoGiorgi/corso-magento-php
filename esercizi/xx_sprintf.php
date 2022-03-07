<?php
    //formattare e stampare a video la seguente stringa con la funzione sprintf 
    //******* ha conseguito un punteggio di nnnn punti al gioco del ******* 
    $nome = "Giovanni";
    $punteggio = 450;
    $gioco = "tiro con l'arco";

    print sprintf("%s ha conseguito un punteggio di %d punti al gioco del %s", $nome, $punteggio, $gioco);