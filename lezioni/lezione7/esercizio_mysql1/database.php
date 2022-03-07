<?php 

$conn = null;

function connetti(){
    global $conn;
    // connessione
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    //stile procedurale
    $conn = mysqli_connect($host, $username, $password, $dbname);
    //print_r($conn);
    if (! mysqli_connect_errno() ) {
       // print "Connessione avvenuta con successo";
    }else{
        echo "ERRORE in Connessione a MySQL: " . mysqli_connect_error();
        return false;
    }
    return true;
}

function leggiMenu(){
    global $conn;

    $query = "SELECT * FROM menu" ;
    $result = mysqli_query($conn, $query);
    if (! $result){
        print ("Errore nella Query:" . mysqli_error($conn));
        return false;
    }
    return $result;
}
function leggiNews(){
    global $conn;

    $query = "SELECT * FROM news order by data asc" ;
    $result = mysqli_query($conn, $query);
    if (! $result){
        print ("Errore nella Query:" . mysqli_error($conn));
        return false;
    }
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