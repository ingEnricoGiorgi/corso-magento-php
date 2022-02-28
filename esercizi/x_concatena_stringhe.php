<?php 
//creare una funzione nominata concatena che utilizzando una variabile globale nominata
//lista aggiunge diverse stringhe di testo 
//-primo messaggio
//-secondo messaggio
//-terzo messaggio
//-quarto messaggio
//-quinto messaggio
//-fine
//alla fine stampare la stringa completa
$lista = null;
function concatena(string $str){
    global $lista;
    $lista .= $str . PHP_EOL;
}
concatena ('primo messaggio');
concatena ('secondo messaggio');
concatena ('terzo messaggio');
concatena ('quarto messaggio');
concatena ('quinto messaggio');
concatena ('fine');
print $lista;
