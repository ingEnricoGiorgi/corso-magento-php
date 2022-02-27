<?php
// connettersi tramite PDO ad una fonte dati e aggiornare 2 campi in una tabella per un id impostato in input
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
    $idToUpdate = 10;
    try {
        $i = 5;
        $nome = "nome$i";
        $cognome = "cognome$i";
        $pdo->beginTransaction();
        $sql = "UPDATE utenti SET nome=:nome,cognome=:cognome WHERE id_utente=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $stmt->bindParam(':id', $idToUpdate, PDO::PARAM_INT);
        $stmt->execute();
        $pdo->commit();
        print "aggiornato!!";
    }catch (PDOException $e){
        print "errore in update";
        $pdo->rollBack();
        die ($e->getMessage());
    }
