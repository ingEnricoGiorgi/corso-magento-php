<!-- 
  creare un file per connettersi ad un database test che contiene una tabella utenti con id_utente, nome, cognome
  inserire un nuovo utente con dati ricevuti dalla get e controllati
  aggiungere un pulsante per richiamare la visualizzazione dei risultati (esercizio xxxx_mysqli_connect_query_close)
  chiudere la connessione al database
  fare il tutto in modalità procedurale che in modalità ad oggetti
  utilizzare mysqli_stmt_prepare e mysqli_stmt_bind_param
  http://localhost/xxxx_mysqli_connect_insert_close.php?mysql_oggetti&nome=xxxx&cognome=yyyy  //per oggetti
  http://localhost/xxxx_mysqli_connect_insert_close.php?nome=xxxx&cognome=yyyy   //per procedurale
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mysql</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
  <?php
    //connessione
    $mysqlObj = $_GET["mysql_oggetti"] ?? true;
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    //stile procedurale
    if (! $mysqlObj){
      print "<h1>Stile Procedurale</h1>";
      $conn = mysqli_connect($host, $username, $password, $dbname);
      if ( mysqli_connect_errno( $conn ) ) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    }
    
    //stile ad oggetti
    if ($mysqlObj){
      print "<h1>Oggetti</h1>";
      $mysqli = new mysqli($host, $username, $password, $dbname);
      if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        die; 
      }
    }
    print <<<EOD
    <a class="btn btn-primary" href="./xxxx_mysqli_connect_query_close.php">Leggi Utenti</a>
EOD;
    $nome = $_GET["nome"] ?? null;
    $cognome = $_GET["cognome"] ?? null;
    //stile procedurale
    if (! $mysqlObj){
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, "INSERT INTO utenti (nome,cognome) VALUES (?,?)");
      mysqli_stmt_bind_param($stmt, "ss", $nome, $cognome );
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
    }
    
    //stile ad oggetti
    if ($mysqlObj){
      $stmt = $mysqli->stmt_init();
      $stmt = $mysqli->prepare("INSERT INTO utenti (nome,cognome) VALUES (?,?)");
      $stmt->bind_param("ss", $nome, $cognome);
      $stmt->execute();
      $stmt->close();

    }


      //stile procedurale
      if (! $mysqlObj){
        mysqli_close($conn);
      }
      
      //stile ad oggetti
      if ($mysqlObj){
        $mysqli->close();
      }
    
?>
          
          </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>