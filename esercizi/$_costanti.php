<?php
/**
 * DEFINIRE una COSTANTE_ESISTENTE e tramite defined() verificarne e stamparne a video l'esistenza
 * Testare l'esistenza inoltre di una COSTANTE_NON_ESISTENTE
*/
define('COSTANTE_ESISTENTE', 'esisto');

if (defined('COSTANTE_ESISTENTE')){
    print "COSTANTE_ESISTENTE Esiste";
}else{
    print "COSTANTE_ESISTENTE NON Esiste";
};
print "\n";
if (defined('COSTANTE_NON_ESISTENTE')){
    print "COSTANTE_NON_ESISTENTE Esiste";
}else{
    print "COSTANTE_NON_ESISTENTE NON Esiste";
};
print "\n";
print "oppure";
print "\n";
print (defined('COSTANTE_NON_ESISTENTE')) ? "COSTANTE_NON_ESISTENTE Esiste" : "COSTANTE_NON_ESISTENTE NON Esiste";