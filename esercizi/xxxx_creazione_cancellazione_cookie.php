<!-- creare un file con 2 pulsanti 
- Scrivi Cookie
- Cancella Cookie
alla pressione del pulsante viene ricaricata la pagina con un parametro in get che scrive un cookie o che lo Cancella
subito dopo la creazione / cancellazione ricaricare la pagina per visualizzare lo stato del cookie -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
        if (! isset($_COOKIE["visita"])){
            print "<h1 class=\"text-center\">Il cookie non Esiste</h1>";
        }else{
            print "<h1 class=\"text-center text-success\">Il cookie esiste</h1>";
        }
        
        switch (true){
            case isset($_REQUEST["scrivi_cookie"]):
                setcookie('visita','appena visitato', strtotime("+10 second"));
                print "<meta http-equiv=\"refresh\" content=\"0; URL='./lezione5b.php'\" />";
                break;
            case  isset($_REQUEST["cancella_cookie"]):
                setcookie('visita', '', time()-1);
                print "<meta http-equiv=\"refresh\" content=\"0; URL='./lezione5b.php'\" />";
                break;
        }

    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-around">
                <a class="btn btn-primary" href="./lezione5b.php?scrivi_cookie">Scrivi Cookie</a>
                <a class="btn btn-danger" href="./lezione5b.php?cancella_cookie">Cancella Cookie</a>
            </div>
        </div>
    </div>

    <?php 
       
    ?>
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