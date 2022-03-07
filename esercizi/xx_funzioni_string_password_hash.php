<?php
/**
 * fare dei test utilizzando password_hash, crypt
 */

print "password_hash:" . password_hash("mia_password", PASSWORD_DEFAULT);
print PHP_EOL;

print "crypt:" . crypt("mia_password", 'mia_$chiave_stringa' );
