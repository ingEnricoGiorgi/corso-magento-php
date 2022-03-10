<?php
include_once("./database.php");
if (!connetti()) {
    die("ERRORE db");
}

$resultDipendenti = leggiDipendenti();
$itemCodice = null;
while ($row = mysqli_fetch_assoc($resultDipendenti)) {
    $codiceD = $row["codice"];
    $itemCodice .= <<<EOD
    <option class="dropdown-item"  >$codiceD</option>
EOD;
}



if(isset($_POST["codice"])){
    
inserisciTimbrature();
//echo("ci entro");

}



$resultTimbrature = leggiTimbrature();
$itemT = null;
while ($row = mysqli_fetch_assoc($resultTimbrature)) {
    $id = $row["id"];
    $codiceT=$row["codice"];
    $data_ora=$row["dataora"];
    $itemT .= <<<EOD
    <tr>
    <td>$id</td>
    <td>$codiceT</td>
    <td>$data_ora</td>
    <tr>
EOD;
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Giorgi-Enrico</title>
</head>

<body>
    
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="giorgi-enrico.php" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4"><img src="./logo.svg" alt=""></span>
        </header>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-12">
            <section id="timbratura" style="text-align:center">
                <h2>Timbratura Dipendenti</h2>
                <div class="btn-group">
                <form action="giorgi-enrico.php" method="POST" name="timbra" enctype="multipart/form-data">
                    <select name="codice" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                      <?php print $itemCodice ?>
                    </select>
                   
                </br>
                <button type="submit" class="btn btn-primary btn-lg">TIMBRA</button>
                </form>
                </div>


                
            </section>
        </div>
        </div>


        <div class="col-12">
            <section id="lista_timbrature" style="text-align:center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Codice</th>
                            <th scope="col">Data e ora</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php print $itemT ?>
                        
                    </tbody>
                </table>
            </section>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
    if (! disconnetti()){
        die ("ERRORE db");
    }
?>