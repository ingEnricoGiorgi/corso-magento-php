<?php 
//lettura da database
// connessione
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";
//stile procedurale
$conn = mysqli_connect($host, $username, $password, $dbname);
print_r($conn);
if (! mysqli_connect_errno( $conn ) ) {
    print "Connessione avvenuta con successo";
}else{
    echo "ERRORE in Connessione a MySQL: " . mysqli_connect_error();
}

//query

//fetch

//close
mysqli_close($conn);