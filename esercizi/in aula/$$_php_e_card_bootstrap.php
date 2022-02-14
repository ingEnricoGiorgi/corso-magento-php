<?php
/**
 * all'interno di un file php con template bootstrap creare una funzione con l'obiettivo di stampare delle card
 * quindi dovrà essere presente una section "news" che all'interno conterrà una serie di card
 * la funzione dovrà accettare come parametro:
 * - titolo
 * - descrizione
 * - immagine
 * nella sezione dovranno essere presenti 4 card
 * la funzione dovrebbe essere chiamata 4 volte una ogni card
 */
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

    <title>Esercizio PHP Card</title>
</head>

<body>
    <h1 class="display-3 text-center">Notizie</h1>
    <div class="container">
        <div class="row">
            <?php print creaCard("Utilizzare HTML", "HTML Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", "https://source.unsplash.com/random/700×700/?fruit") ?>
            <?php print creaCard("Utilizzare CSS", "CSS Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", "https://source.unsplash.com/random/700×700/?vegetables") ?>
            <?php print creaCard("Utilizzare Bootstrap", "Bootstrap Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", "https://source.unsplash.com/random/700×700/?mountain") ?>
            <?php print creaCard("Utilizzare PHP", "PHP Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", "https://source.unsplash.com/random/700×700/?beach") ?>
        </div>
    </div>
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
    function creaCard($titolo, $descrizione, $pathImmagine){
        $variabile = <<<EOD
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
            <img src="$pathImmagine" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">$titolo</h5>
            <p class="card-text">$descrizione</p>
            <a href="#" class="btn btn-outline-secondary">Scopri di Più</a>
            </div>
        </div>
      </div>
EOD;
        return $variabile;
    }
?>