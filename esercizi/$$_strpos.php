<?php 
// valorizzare 1 stringa e ricercare stampando se trovata o non trovata una sottostringa, vedi esempio
$stringa = "Il mio amico Claudio gioca a Calcio";
$findMe = "Simone";
$strPos = (strpos($stringa, $findMe) ) ?: 'non trovata';
print "la stringa è in posizione: {$strPos}";
