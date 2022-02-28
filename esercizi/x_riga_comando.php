<?php
/**
 * provare a chiamare un file da riga comando stampando i parametri passati in input e il numero dei parametri
 */
print 'argc:'; 
print_r($argc);

print PHP_EOL;
print 'argv:'; 
print PHP_EOL;
print_r($argv);

/*
argc:3
argv:
Array
(
    [0] => index.php
    [1] => eee      
    [2] => ddd      
)
*/