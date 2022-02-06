<?php
//creare una struttura di directory simile a questa
// - cartella di lavoro
// - $$_getcwd_chdir.php
//   + includes  
//      miofile.inc
// aprire leggere e stampare a video il contenuto di miofile.php  
// fare un test anche lavorando nella cartella corrente (con conseguente errore)
print getcwd();

print file_get_contents('miofile.inc'); //errore failed to open stream: No such file or directory in C:\xampp\htdocs\its\corso-magento-php\esercizi\$$$_getcwd_chdir.php on line 10

chdir ('./includes');

print file_get_contents('miofile.inc'); //ok

