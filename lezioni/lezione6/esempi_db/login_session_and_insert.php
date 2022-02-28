<?php  session_start(); ?>
<!-- 
    creare un form con 2 input: login e password + submit + link logout (che passa in get il parametro logout)
    ricevere i dati del form
    if esiste nella REQUEST  il parametro logout allora distruggere la sessione e messaggio "Arrivederci ******"
    if se esiste la variabile utente nell'array session
            print  "Ciao *****"
        else
            verificare se ricevo parametro password, successivamente:
                if se la password è uguale 
                --** NEW: LEGGERE SE LA PASSWORD + UTENTE è presente tra gli utenti della tabella utente nel database test
                a mia-pwd (che è password corretta) 
                    valorizzare una variabile di sessione nominata utente con valore = nome utente passato
                else
                    print "utente non loggato"
                end if
     end if
    ----
    --** NEW: creare un form su pagina_riservata.php con nome + cognome + utente + password e al submit 
    --** NEW: del form controlalre i dati e inserirli nella tabella utenti 
 -->
 <?php 
    if (isset($_REQUEST["logout"])){
        //vuole uscire
        if (! isset($_SESSION["utente"])){
            $messaggio = "Non sei loggato, inutile uscire!!!";
        }else{
            $messaggio = "Arrivederci " . $_SESSION["utente"] ?? null;
            session_destroy();
            unset($_SESSION["utente"]);
        }
    }else{
        if (isset($_SESSION["utente"])){
            //è loggato
            $messaggio = "Ciao " . $_SESSION["utente"] ?? null;
        }else{
            //non è loggato
            if ($_REQUEST['password'] ?? null){
                $password = htmlspecialchars($_REQUEST['password']);
                $utente = htmlspecialchars($_REQUEST['user']);
                if (password_verify($password, password_hash('mia-pwd', PASSWORD_DEFAULT))){
                    //password corretta
                    $_SESSION["utente"] = $utente;
                    $messaggio = "Benvenuto ". $_SESSION["utente"] ?? null;;
                }else{
                    $messaggio = "Password non corretta!";
                }
            }else{
                $messaggio = "Utente non loggato";
            }
        }
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

    <title>session e login</title>
  </head>
  <body>
    <?php include_once("navbar.php");  ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $messaggio ?></h1>
            </div>
        </div>
    </div>

    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Logout</h2>
                <a class="btn btn-danger" href="./login_session.php?logout=true">logout</a>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12">
            <h2>Login</h2>
                <form action="login_session.php" method="POST" name="login" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="user" class="form-label">Utente</label>
                        <input type="text" class="form-control" id="user" name="user" >
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" >
                        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                    </div>
                </form>
            </div>
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
