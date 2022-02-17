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
function concatena(string $str){
    global $lista;
    $lista .= $str;
}
$lista = null;
concatena ('primo messaggio' . PHP_EOL);
concatena ('secondo messaggio' . PHP_EOL);
concatena ('terzo messaggio' . PHP_EOL);
concatena ('quarto messaggio' . PHP_EOL);
concatena ('quinto messaggio' . PHP_EOL);
concatena ('fine' . PHP_EOL);
print $lista;