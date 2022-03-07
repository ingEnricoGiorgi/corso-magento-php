<!-- 
    preparare un layout con una navbar e una section news
    il menù dovrà avere
    - nome
    - link
    le news dovranno avere:
    - titolo
    - data
    - descrizione
    creare nel database test 2 tabelle nominate menù e news

    popolare manualmente da phpmyadmin con alcuni record la tabella menù e la tabella news

    inserire nel layout la lettura del menù che verrà presentato nella navbar
    inserire nel layout la lettura delle news che verranno inserite nella sezione news

    step 1: menù
    step 2: news
 -->
 <?php 
    session_start();
    include_once("./database_pdo.php");
    if (! connetti()){
        die ("ERRORE db");
    }
    $itemMenu = null;
    $itemNews = null;
    $messaggio = null;
    $resultMenu = leggiMenu();
    $resultNews = leggiNews();
    if (!$resultMenu || ! $resultNews ) {
        $messaggio = <<<EOD
        <div class="alert alert-danger" role="alert">
            Errore in Lettura!!!
        </div>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>News</title>
  </head>
  <body>
    <?php 
    if ($resultMenu){
            foreach($resultMenu as $row) {
                $nome = $row["nome"];
                $link = $row["link"];
                $itemMenu .= <<<EOD
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="$link">$nome</a>
                    </li>
EOD;
            } 

            print <<<EOD
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Loogo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        $itemMenu
                    </ul>
            </div>
            </nav>                
EOD;
    }else{
        print $messaggio;
    }
            ?>

    <h1 class="text-center my-4">Notizie PDO</h1>
<?php 
    if ($resultNews){
        foreach($resultNews as $row) {
            $titolo = $row["titolo"];
            $descrizione = $row["descrizione"];
            $data = $row["data"];
            $itemNews .= <<<EOD
                <div class="col-12 col-sm-6 col-md-4 mb-2 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <time>$data</time>    
                            <h5 class="card-title">$titolo</h5>
                            <p class="card-text">$descrizione</p>
                        </div>
                    </div>
                </div>
EOD;
        }
        print <<<EOD
            <section id="news">
                <div class="container">
                    <div class="row d-flex">
                        $itemNews
                    </div>
                </div>
            </section>
EOD;

     }else{
         print $messaggio;
     } 
     
?>        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <footer class="bg-dark text-center text-white text-lg-start mt-4 w-100">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Mauro Casadei</a>
    </div>
    <!-- Copyright -->
    </footer>
  </body>
</html>
<?php
    if (! disconnetti()){
        die ("ERRORE db");
    }
?>