<?php 
//lettura da database
$conn = null;
if (! connetti()){
    die ("ERRORE");
}
if (! leggi()){
    die ("ERRORE");
}
if (! disconnetti()){
    die ("ERRORE");
}





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
        print "Connessione avvenuta con successo";
    }else{
        echo "ERRORE in Connessione a MySQL: " . mysqli_connect_error();
        return false;
    }
    return true;
}
function leggi(){
    global $conn;
    //query
    print "\n";
    $result = mysqli_query($conn, "SELECT * FROM utenti WHERE id_utente < 10");
    if (! $result){
        print ("Errore nella Query:" . mysqli_error($conn));
        return false;
    }
    //fetch
    print "\n";
    while ($row = mysqli_fetch_assoc($result)){
        printf ("Cognome:%s - Nome:%s \n", $row["nome"], $row["cognome"]);
    }
    return true;
}
function disconnetti(){
    global $conn;
    //close
    if (! mysqli_close($conn)){
        return false;
    }
    return true;
}