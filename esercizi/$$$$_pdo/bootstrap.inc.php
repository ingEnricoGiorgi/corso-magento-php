<?php
    include_once("database.php"); 
    include_once("funzioni.inc.php"); 
    connect();
    if (! isset($_SESSION['token'])) {$_SESSION['token'] = time();}