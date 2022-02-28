<?php
/**
 * creare un cookie e visualizzarne il valore
 */

 setcookie("miocookie","valore",strtotime( '+30 days' )); //1 mese
 var_dump($_COOKIE['miocookie']);
