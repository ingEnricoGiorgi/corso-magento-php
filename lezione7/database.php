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
       echo "connessione riuscita";
    }else{
        echo "ERRORE in Connessione a MySQL: " . mysqli_connect_error();
        return false;
    }
    return true;
}
function leggiMenu(){
    global $conn;
    
    //costruzione della query
    $query = "SELECT nome,link FROM menu";
    $result = mysqli_query($conn, $query);
    if (! $result){
        print ("Errore nella Query:" . mysqli_error($conn));
        return false;
    }

    
   // return [$nome,$link];
   return $result;
}
function leggiNews(){
    global $conn;
    
    //costruzione della query
    $query = "SELECT titolo,data,descrizione FROM news";
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