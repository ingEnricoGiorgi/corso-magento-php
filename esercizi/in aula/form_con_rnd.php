<?php 
/*creare un form che:
    1. presenti 2 parametri: minimo e massimo (input number)
    2. alla pressione del submit riceva i due parametri
    3. controlli i 2 parametri grazie a filter_var($parametro1, FILTER_SANITIZE_NUMBER_INT);
    4. se i parametri non sono numerici o > 0 presentare errore tramite alert di bootstrap
    4a. se il 1 parametro è > o = al secondo presentare errore
    5. se tutto ok creare un numero random compreso tra i 2 paramentri 
    6. ripresentare sotto al numero random il medesimo form "pronto" per ricalcolare un altro numero random

    */
        $min = filter_var($_REQUEST["min"] ?? 0, FILTER_SANITIZE_NUMBER_INT);
        $max = filter_var($_REQUEST["max"] ?? 0, FILTER_SANITIZE_NUMBER_INT);
        $form = <<<EOD
        <h1 class="text-center">Estrai un numero casuale</h1>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                <form action="form_con_rnd.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="min" class="form-label">Minimo</label>
                            <input type="number" class="form-control" id="min" name="min" value="$min">
                        </div>
                        <div class="mb-3">
                            <label for="max" class="form-label">Massimo</label>
                            <input type="number" class="form-control" id="max" name="max" value="$max">
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Estrai il prossimo numero</button>
                    </form>
                </div>
            </div>
        </div>    
EOD;        
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Genera un numero Casuale</title>
</head>

<body>
    <?php 
        switch (true){
            case ! is_numeric($min) || $min==0:
                printMessage("Il valore minimo non è corretto", "danger");
                break;
            case ! is_numeric($max)  || $max==0:
                printMessage("Il valore massimo non è corretto", "danger");
                break;
            case $min >= $max && $min != 0 && $max != 0:
                printMessage("Il valore minimo non può essere uguale o superiore al massimo", "danger");
                break;
            default:
                if ($min > 0 && $max >0){
                    $numRnd = rand($min,$max);
                    printMessage("<span class=\"display-5\">Il numero generato è $numRnd</span>", "info");
                }else{
                    printMessage("Ritenta", "warning");
                }
                break;
        }       
        print $form;
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php 
    function printMessage($message, $type){
        print <<<EOD
        <div class="alert alert-$type text-center" role="alert">
            $message
        </div>
EOD;
    }

?>