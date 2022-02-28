<?php 
// http://localhost/.../lezione6/lezione6a.php?operazione=u&nome=marco2&cognome=gatti3&id=28
// http://localhost/.../lezione6/lezione6a.php?operazione=i&nome=marco2&cognome=gatti3
// http://localhost/.../lezione6/lezione6a.php?operazione=d&id=14
//lettura da database
$conn = null;
if (! connetti()){
    die ("ERRORE");
}
switch ($_REQUEST["operazione"] ?? null){
    case "i":
        if (isset($_REQUEST["nome"]) && isset($_REQUEST["cognome"])){
            mysqli_autocommit($conn, false);
        
            if (! inserisci()){
                mysqli_rollback($conn);
                die ("ERRORE");
            }
            if (! inserisci2()){
                mysqli_rollback($conn);
                die ("ERRORE");
            }
            mysqli_commit($conn);
        
        }        
        break;
    case "u":
        if (isset($_REQUEST["nome"]) && isset($_REQUEST["cognome"]) && isset($_REQUEST["id"]) ){
            mysqli_autocommit($conn, false);
        
            if (! aggiorna()){
                mysqli_rollback($conn);
                die ("ERRORE");
            }
            mysqli_commit($conn);
        
        }
        break;
    case "d":
        if (isset($_REQUEST["id"]) ){
            mysqli_autocommit($conn, false);
        
            if (! cancella()){
                mysqli_rollback($conn);
                die ("ERRORE");
            }
            mysqli_commit($conn);
        
        }        
        break;
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
    print "Il record inserito ha id:" . mysqli_insert_id($conn). "<br>";
    return true;
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

function aggiorna(){
    global $conn;

    $nome = $_REQUEST["nome"]; //"giovanni";
    $cognome = $_REQUEST["cognome"]; //"de angeli";
    $id = $_REQUEST["id"]; // 10

    //inizializzo lo statement
    $stmt = mysqli_stmt_init($conn);

    //costruzione della query
    $query = "UPDATE utenti set nome=?,cognome=? WHERE id_utente=? limit 1";
    //preparazione della query
    if (mysqli_stmt_prepare($stmt, $query)){
        //inserimento dei parametri nella query
        mysqli_stmt_bind_param($stmt, "ssi", $nome, $cognome, $id ); //inserisco i parametri
        //esecuzione della query
        mysqli_stmt_execute($stmt);
    }
    if (mysqli_stmt_error($stmt)){
        print("Errore nell'aggiornamento: " . mysqli_stmt_error($stmt));
        return false;
    }
    return true;
}
function cancella(){
    global $conn;

    $id = $_REQUEST["id"]; // 10

    //inizializzo lo statement
    $stmt = mysqli_stmt_init($conn);

    //costruzione della query
    $query = "DELETE FROM utenti WHERE id_utente=? limit 1";
    //preparazione della query
    if (mysqli_stmt_prepare($stmt, $query)){
        //inserimento dei parametri nella query
        mysqli_stmt_bind_param($stmt, "i", $id ); //inserisco i parametri
        //esecuzione della query
        mysqli_stmt_execute($stmt);
    }
    if (mysqli_stmt_error($stmt)){
        print("Errore nella cancellazione: " . mysqli_stmt_error($stmt));
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
        printf ("%d Cognome:%s - Nome:%s <br>", $row["id_utente"], $row["cognome"], $row["nome"]);
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