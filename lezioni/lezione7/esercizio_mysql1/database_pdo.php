<?php 

$pdo = null;

function connetti(){
    global $pdo;
    // $miavar= "ciao";
    // $a = "miavar";
    // print $$a; //ciao
    // connessione
    $username = "root";
    $password = "";
    $servername = "localhost";
    $dbname = "testXX";

    //stile procedurale
    //"sqlsrv:Server=YouAddress;Database=YourDatabase", "Username", "Password"
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=UTF8";
        // try{    
        //     $pdo = new PDO($dsn, $username, $password , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        // }catch (PDOException $e){
        //     die ($e->getMessage());
        // }
        try {
            $pdo = new PDO($dsn, $username, $password , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }catch (Exception $ex){
            //var_dump($ex);
            print "Codice di Errore: " . $ex->getCode() ."<br>";
            print "Descrizione Errore: " . $ex->getMessage()."<br>";
            print "Avvenuto alla riga: " . $ex->getLine()."<br>";
            print "Avvenuto nel file: " . $ex->getFile()."<br>";
            die;
        }
        return true;
}

function leggiMenu(){
    global $pdo;

    $query = "SELECT * FROM menu" ;
    try {
        $stm = $pdo->query($query);
        $result = $stm->fetchAll();
    }catch (Exception $e){
        die ($e->getMessage());
    }        
    //non ho errori
    return $result;
}
function leggiNews(){
    global $pdo;

    $query = "SELECT * FROM news order by data asc" ;
    try {
        $stm = $pdo->query($query);
        $result = $stm->fetchAll();
    }catch (Exception $e){
        die ($e->getMessage());
    }        
    //non ho errori
    return $result;
}

function disconnetti(){
    global $conn;
    //close
    if (! mysqli_close($conn)){
        return false;
    }
    return true;
}