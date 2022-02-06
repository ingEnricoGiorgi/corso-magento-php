<?php 
// valorizzare 1 stringa e ricercare stampando se trovata o non trovata una sottostringa, vedi esempio, ma passando la stringa ricercata da riga comando e verificando se è stata ricevuta
if (isset($argv[1])){
    $findMe = $argv[1];
} else {
    print "passare almeno un argomento!";
    die;
}
$stringa = "Il mio amico Claudio gioca a Calcio";
$strPos = (strpos($stringa, $findMe) ) ?: 'non trovata';
print "la stringa è in posizione: {$strPos}";
