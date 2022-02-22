<?php
/*
        per casa
        realizzare un form di registrazione che presenterà i campi:
            - nome, cognome, telefono, email, password
            - alla pressione del button submit verrà richiamata la medesima pagina
            - i campi verranno sanitizzati
            - se i campi sono tutti != null allora dovranno essere inseriti in un array
            - [
                'nome' => ******,
                'cognome' => ******,
                'telefono' => ******,
                'email' => ******,
                'password' => ******,
                ]
            - stampare l'array e inserire un pulsante per "reimpostare i dati" ovvero ripropone il form "pulito"

    */
    $nome = htmlspecialchars($_REQUEST["nome"] ?? null,ENT_QUOTES);
    $cognome = htmlspecialchars($_REQUEST["cognome"] ?? null,ENT_QUOTES);
    $email = filter_var($_REQUEST["email"] ?? null, FILTER_SANITIZE_EMAIL);
    $telefono = htmlspecialchars($_REQUEST["telefono"] ?? null,ENT_QUOTES);
    $password = htmlspecialchars($_REQUEST["password"] ?? null,ENT_QUOTES);
    $form = <<<EOD
        <h1 class="text-center">Registrati</h1>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                <form action="registrazione.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" >
                        </div>
                        <div class="mb-3">
                            <label for="cognome" class="form-label">Cognome</label>
                            <input type="text" class="form-control" id="cognome" name="cognome" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Registrati</button>
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

    <title>Registrati</title>
</head>

<body>
    <?php 
        if (isset($_REQUEST["nome"])){
            if ($nome && $cognome && $email && $telefono){
                $ar = array(
                    'nome' => $nome,
                    'cognome' => $cognome,
                    'email' => $email,
                    'telefono' => $telefono,
                    'password' => password_hash($password, PASSWORD_BCRYPT),
                );
                $data = <<<EOD
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 offset-md-3">
                            %s
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a class="btn btn-primary mb-3" href="./registrazione.php">Reinserisci Dati</a>
                        </div>
                    </div>
                </div>
EOD;
                $table = createTable($ar);
                printf($data, $table) ;
            }else{
                printMessage("Non hai inserito tutti i campi", "warning");
            }
        }else{
            print $form;
        }       
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
    function createTable($ar){
        $table = <<<EOD
        <h3>Dati Inseriti</h3>
        <table class="table table-striped">
EOD;
        foreach ($ar as $k => $v){
            $table .= <<<EOD
                <tr>
                    <td>$k</td><td>$v</td>
                </tr>
EOD;
        }
        $table .= <<<EOD
        </table>
EOD;
        return $table;
    }

?>