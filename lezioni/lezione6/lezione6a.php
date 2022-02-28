<?php 
//lettura da database
$conn = null;
if (! connetti()){
    die ("ERRORE");
}
if (isset($_REQUEST["nome"]) && isset($_REQUEST["cognome"])){
    if (! inserisci()){
        die ("ERRORE");
    }
    // if (! inserisci2()){
    //     die ("ERRORE");
    // }
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
function inserisci(){
    global $conn;

    $nome = $_REQUEST["nome"]; //"giovanni";
    $cognome = $_REQUEST["cognome"]; //"de angeli";

    //inizializzo lo statement
    $stmt = mysqli_stmt_init($conn);

    //costruzione della query
    $query = "INSERT INTO utenti (nome,cognome) VALUES (?,?)";
    //preparazione della query
    if (mysqli_stmt_prepare($stmt, $query)){
        //inserimento dei parametri nella query
        mysqli_stmt_bind_param($stmt, "ss", $nome, $cognome ); //inserisco i parametri
        //esecuzione della query
        mysqli_stmt_execute($stmt);
    }
    if (mysqli_stmt_error($stmt)){
        print("Errore nell'inserimento: " . mysqli_stmt_error($stmt));
        return false;
    }
    return true;

    //costruzione della query + inserimento di parametri + esecuzione
}
function inserisci2(){
    global $conn;
    
    //ripulisce i parametri per l'inserimento nella query
    $nome = mysqli_real_escape_string($conn, $_REQUEST["nome"] ?? null);
    $cognome = mysqli_real_escape_string($conn,  $_REQUEST["cognome"] ?? null);

    //costruisce la query
    $sql = "INSERT INTO utenti (nome,cognome) VALUES ('$nome','$cognome')";

    //esegue e verifica la query
    if (!mysqli_query($conn, $sql)) {
        print "errore nella query" . mysqli_error($conn);
        return false;
    }
    return true;
}
function leggi(){
    global $conn;
    //query

    $result = mysqli_query($conn, "SELECT * FROM utenti");
    if (! $result){
        print ("Errore nella Query:" . mysqli_error($conn));
        return false;
    }
    //fetch
    while ($row = mysqli_fetch_assoc($result)){
        printf ("Cognome:%s - Nome:%s <br>", $row["cognome"], $row["nome"]);
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