<?php
/**
 * REALIZZARE UNA OPERAZIONE E FARE UN TEST DI CONFRONT CON UNA VARIABILE FLOAT SIA UTILIZZANDO != CHE bccomp
 * REALIZZARE l'OPERAZIONE TRAMITE cbadd E FARE il medesimo test di cui sopra
*/
$a = 0.17;
$b = 1 - 0.83;
if ($a != $b) {
    print "A no match a:" . $a . " b:" . $b;
 }else{
     print "A match";
 }
 print "\n";
if (bccomp($a, $b, 2)) {
    print "B no match a:" . $a . " b:" . $b;
}else{
    print "B match";
}
print "\n";
print "\n";
//secondo
$b = bcadd(1, -0.83, 2); //0.17
if ($a != $b) {
    print "A no match a:" . $a . " b:" . $b;
 }else{
     print "A match";
 }
 print "\n";
if (bccomp($a, $b, 2)) {
    print "B no match a:" . $a . " b:" . $b;
}else{
    print "B match";
}