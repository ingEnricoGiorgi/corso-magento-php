<?php
// connettersi tramite PDO ad una fonte dati e selezionare 2 campi da una tabella
// includendo una LIKE 
// utilizzare nella connection array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) al fine di attuare
// una gestione errori

$dsn = 'mysql:host=localhost;dbname=test;charset=UTF8';
    $user = 'root';
    $password = '';
    try{    
        $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch (PDOException $e){
        die ($e->getMessage());
    }

    try {
        $nome = "%a%";
        $pdo->beginTransaction();
        $sql = "SELECT * FROM utenti WHERE nome like :nome";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $key => $element){
            print "{$element["nome"]} {$element["cognome"]} \n";
        }
    }catch (PDOException $e){
        print "Errore";
        die ($e->getMessage());
    }
