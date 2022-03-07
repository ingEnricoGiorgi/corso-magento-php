<?php
// fare un esempio con la funzione substr_replace
$frase = "la mia fra
se potrebbe avere più volte la parola frase ";
print substr_replace($frase, "questa la parte sostituita", 10);
