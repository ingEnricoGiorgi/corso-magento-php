<!-- 
    creare un form con alcuni campi cognome, nome, telefono e un pulsante submit - action verso la medesima pagina
    ricevere il form (dopo il submit) e ciclare l'array request
    inserire in un array tutti i campi passati nel form dopo averli sanitizzati
    stampare l'array in una tabella
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Esercizio Get Post String Cicli</title>
  </head>
  <body>
      <?php include_once("./navbar.php"); ?>
    <h1 class="text-center">Esercizio Get Post String Cicli</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    //Array ( [cognome] => Casadei [nome] => Mauro [telefono] => 0541654789 )
                    //print_r($_REQUEST);
                    $ar = array();
                    foreach ($_REQUEST as $name => $value){
                        $value_sanitizzato = sanitizzaString($value);
                        $name_sanitizzato = sanitizzaString($name);
                        $ar[$name_sanitizzato] = $value_sanitizzato;
                    }
                    printTable($ar);
                ?>
            </div>    
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form name="registrazione" action="lezione5.php" method="POST" enctype="multipart/form-data">
                    <?php
                        print createInput("cognome", "Cognome", "required");
                        print createInput("nome", "Nome", "required");
                        print createInput("telefono", "Telefono", null);
                        print createInput("citta", "Città", null);
                    ?>
                    <button type="submit" class="btn btn-primary">Invia i Dati</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>  </body>
</html>
<?php 
    function createInput($name, $label, $attributi = null){
        $obbligatorio = null;
        if (substr_count($attributi, "required") > 0){
            $obbligatorio = "*";
        }
        return <<<EOD
        <div class="input-group mb-3">
            <label class="input-group-text" for="$name">$label$obbligatorio</label>
            <input type="text" class="form-control" id="$name" name="$name"  placeholder="Inserisci il $label" $attributi>
        </div>
EOD;
    }
    function printTable($ar){
        print <<<EOD
        <table class="table">
        <thead>
          <tr>
EOD;
            foreach ($ar as $name => $value){
                print "<th>$name</th>";
            }
        print <<<EOD
            </tr>
        </thead>
        <tbody>
            <tr>
EOD;
            foreach ($ar as $name => $value){
                print "<td>$value</td>";
            }
            print <<<EOD
            </tr>
        </tbody>
        </table>
EOD;
    }
    function sanitizzaString($var){
        return addslashes(htmlspecialchars(strip_tags($var), ENT_QUOTES));
        //return htmlspecialchars($var, ENT_QUOTES);
    }
?>