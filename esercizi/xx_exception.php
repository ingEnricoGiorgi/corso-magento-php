<?php
try {
    print "prima";
    if (!null){
        throw new Exception('errore');        
    }
    print "dopo";
}catch (Exception $e){
    print $e->getMessage();
}
print "fuori";
