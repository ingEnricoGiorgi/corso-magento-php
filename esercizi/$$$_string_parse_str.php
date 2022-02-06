<?php
/**
 * fare dei test utilizzando parse_str
 */

parse_str("p=password&nome=test", $ar);
print_r($ar);


/*
Array
(
    [p] => password
    [nome] => test
)
 */