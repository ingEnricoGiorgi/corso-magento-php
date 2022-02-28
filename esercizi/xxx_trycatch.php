<?php
// Caso 1:
// aprire un file che non esiste e:
// scatenare manualmente una eccezione e stampare il codice e descrizione
// Caso 2: 
// gestire un proprio error_handler per i warning

function testTryCatch($checkBefore = true){
    try {
        $fName='nonesiste.php';
        if ($checkBefore && ! file_exists($fName)) throw new InvalidArgumentException("file non trovato\n",101); //caso 1
        fopen($fName,'r');
        print "non verrà eseguita \n";
    } catch (Exception $e) {
        printf ("Errore: %s - %s ",$e->getCode(),$e->getMessage());
    }
}

testTryCatch(true);
print "\nDopo try catch\n";

set_error_handler("warning_handler", E_WARNING);
testTryCatch(false);

function warning_handler($errno, $errstr) { 
    print "warning_handler {$errno},  {$errstr}";
    die;
}