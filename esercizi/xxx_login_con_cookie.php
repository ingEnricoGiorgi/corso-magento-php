<!-- 
    creare un form con 2 input: login e password + submit
    ricevere i dati del form
    verificare se ricevo parametro password, successivamente:

        if se la password è uguale a mia-pwd (che è password corretta) 
            setcookie istanziare un cookie e scrivere "benvenuto utente" [cookie con durata 1 minuto]
        else
        
        end if
    se non ho ricevuto il parametro password
     if se esiste il cookie
            print  "utente già loggato"
        else
            print "utente non loggato
     end if
    ----
 -->
 <?php 
        $messaggio = null;
        if ($_COOKIE["login"] ?? null){
            $messaggio = "Utente già loggato";
        }else{
            if ($_REQUEST['password'] ?? null){
                $password = htmlspecialchars($_REQUEST['password']);
                if (password_verify($password, password_hash('mia-pwd', PASSWORD_DEFAULT))){
                    //password corretta
                    setcookie('login','ok', strtotime("+1 minutes"));
                    $messaggio = "Benvenuto Utente";
                }else{
                    $messaggio = "Password non corretta!";
                }
            }else{
                $messaggio = "Utente non loggato";
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

    <title>cookie e login</title>
  </head>
  <body>
    <h1><?php echo $messaggio ?></h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="login.php" method="POST" name="login" enctype="multipart/form-data">
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
