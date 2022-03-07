<?php
// connettersi tramite PDO ad una fonte dati e inserire 2 campi in una tabella
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
        $i = 1;
        $nome = "nome$i";
        $cognome = "cognome$i";
        $pdo->beginTransaction();
        $sql = "Insert into utenti (nome,cognome) values(:nome,:cognome)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $stmt->execute();
        $pdo->commit();
        print "inserito!!";
    }catch (PDOException $e){
        print "problema";
        $pdo->rollBack();
        die ($e->getMessage());
    }
