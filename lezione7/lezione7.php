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
include_once("./database.php");
if (!connetti()) {
    die("ERRORE db");
}
$result = leggiNews();
$itemNews = null;
while ($row = mysqli_fetch_assoc($result)) {
    $titolo = $row["titolo"];
    $data = $row["data"];
    $descrizione = $row["descrizione"];
    $itemNews .= <<<EOD
<div class="col-12 col-sm-6 col-md-4"> <!
    <div class="card" >
        <img src=".." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">$titolo</h5>
            <p class="card-text">$data</p>
            <p class="card-text">$descrizione</p>
        </div>
    </div>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>menu e news</title>
</head>
<!-- SHIFT + ALT + F -->

<body>
    <?php include_once("navbar.php");  ?>
    
    <section id="news" class="container"><!-- class container-->
        <div class="row">

        <?php print $itemNews ?>
    </div>

    </section>
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