<?php
/**
 * tipizzare il parametro di una funzione e provare a richiamarla con un tipo di parametro diverso da quello specificato e con uno invece corretto
 */

declare(strict_types=1); // attiviamo il controllo sui tipi

function printHello(string $name) // la funzione accetta solo valori di tipo string
{
    echo "Hello $name";
}

printHello('Test');
//printHello(4); // genera un errore
//PHP Fatal error:  Uncaught TypeError: Argument 1 passed to printHello() must be of the type string, int given...
