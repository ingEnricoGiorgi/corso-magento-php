<?php
/**
 * richiamare una funzione che ritorna un int e provare a ritornare sia un intero che un float e vedere errore
 */
declare(strict_types=1);

function sum(int $a, int $b): int
{
    return $a + $b;
}

echo sum(4, 9);

function sum2(int $a, int $b): int
{
    return 4.4 + $b;
}

echo sum2(4, 9); //PHP Fatal error: Uncaught TypeError: Return value of sum() must be of the type int, float returned...