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
function inserisci(){
    global $conn;

    $nome = $_REQUEST["nome"]; //"giovanni";
    $cognome = $_REQUEST["cognome"]; //"de angeli";
    $utente = $_REQUEST["utente"]; //"de angeli";
    $password = password_hash($_REQUEST["password"], PASSWORD_DEFAULT); //"de angeli";

    //inizializzo lo statement
    $stmt = mysqli_stmt_init($conn);

    //costruzione della query
    $query = "INSERT INTO utenti (nome,cognome,utente,password) VALUES (?,?,?,?)";
    //preparazione della query
    if (mysqli_stmt_prepare($stmt, $query)){
        //inserimento dei parametri nella query
        mysqli_stmt_bind_param($stmt, "ssss", $nome, $cognome, $utente, $password ); //inserisco i parametri
        //esecuzione della query
        mysqli_stmt_execute($stmt);
    }
    if (mysqli_stmt_error($stmt)){
        print("Errore nell'inserimento: " . mysqli_stmt_error($stmt));
        return false;
    }
    $id_inserted = mysqli_insert_id($conn);
    print <<<EOD
    <div class="alert alert-success" role="alert">
    Il record inserito ha id: $id_inserted
    </div>
EOD;
    return true;
}
function controlla_utente(){
    global $conn;

    //inizializzo lo statement
    $stmt = mysqli_stmt_init($conn);
    $password = mysqli_real_escape_string($conn, $_REQUEST["password"] ?? null);
    $utente = mysqli_real_escape_string($conn, $_REQUEST["utente"] ?? null);

    //costruzione della query
    $query = "SELECT * FROM utenti WHERE utente='" . $utente ."'" ;
    $result = mysqli_query($conn, $query);
    if (! $result){
        print ("Errore nella Query:" . mysqli_error($conn));
        return false;
    }
    while ($row = mysqli_fetch_assoc($result)){
        if (password_verify($password, $row["password"])) {
            $_SESSION["utente"] = $row["nome"] . " " . $row["cognome"];
            return true;
        }
    }
    return false;
}

function disconnetti(){
    global $conn;
    //close
    if (! mysqli_close($conn)){
        return false;
    }
    return true;
}