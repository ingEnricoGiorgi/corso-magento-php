<?php 
/*
    creiamo un form in cui inserire un dato, il dato verrà passato tramite il form e:
        - controllato se intero
        - moltiplicato * 2
        - visualizzato all'utente

*/
        include ("functions.php");
        $numero = filter_var($_REQUEST["numero"] ?? 0, FILTER_SANITIZE_NUMBER_INT);
        $risultato = $numero * 2;
        $form = <<<EOD
        <form action="form_moltiplica.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="numero" class="form-label">Numero</label>
                <input type="number" class="form-control" id="numero" name="numero" value="$numero">
                <button type="submit" class="btn btn-primary mb-3">Moltiplica</button>
            </div>
        </form>        
EOD;
        $seOk = scriviMessaggio($risultato, "info");
        $seErr = scriviMessaggio("Il numero inserito non è valido", "danger");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Raddoppia</title>
  </head>
  <body>
    <h1 class="text-center">Raddoppia il numero</h1>
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
                <div class="col-12 col-md-6 offset-md-3">
                    <?php
                        print $form;
                    ?>
                </div>
                <?php
                    print ($numero > 0) ? $seOk : $seErr;
                    // if ($numero > 0){
                    //     print $seOk;
                    // }else{
                    //     print $seErr;
                    // }
                ?>
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
//     function scriviMessaggio($messaggio, $type){
//         return <<<EOD
//         <div class="alert alert-$type" role="alert">
//             <h3 class="display-5 text-center">
//                 $messaggio
//             </h3>
//         </div>          
// EOD;
//     }
?>