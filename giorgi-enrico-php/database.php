<?php 

$conn = null;

function connetti(){
    global $conn;
    // connessione
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "giorgi_enrico";
    //stile procedurale
    $conn = mysqli_connect($host, $username, $password, $dbname);
    //print_r($conn);
    if (! mysqli_connect_errno() ) {
       // print "Connessione avvenuta con successo";
       //echo "connessione riuscita";
    }else{
        echo "ERRORE in Connessione a MySQL: " . mysqli_connect_error();
        return false;
    }
    return true;
}

function leggiDipendenti(){
    global $conn;
    
    //costruzione della query
    $query = "SELECT codice FROM dipendenti";
    $result = mysqli_query($conn, $query);
    if (! $result){
        print ("Errore nella Query:" . mysqli_error($conn));
        return false;
    }

    
   // return [$nome,$link];
   return $result;
}

function inserisciTimbrature(){

    global $conn;
    
        $codice = mysqli_real_escape_string($conn, $_REQUEST["codice"]);
        //costruzione della query
        $query = "INSERT INTO timbrature (codice) VALUES ('$codice')" ;
        
        if ($conn->query($query) === TRUE) {
            //echo "New record created successfully";
          } else {
            echo "Error: " . $query . "<br>" . $conn->error;
          }
     
    
}


function leggiTimbrature(){
    global $conn;
    
    //costruzione della query
    $query = "SELECT id,codice,dataora FROM timbrature";
    $result = mysqli_query($conn, $query);
    if (! $result){
        print ("Errore nella Query:" . mysqli_error($conn));
        return false;
    }

    
   // return [$nome,$link];
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






?>