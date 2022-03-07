<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <?php if ($_REQUEST["nominativo"] ?? null){ ?>
        <?php 
            print "<h1>Dati Inseriti</h1>";
            printData("Nominativo",$_REQUEST["nominativo"]);
            printData("Email",$_REQUEST["email"]);
            printData("Messaggio",$_REQUEST["messaggio"]);
            ?>
    <?php }else{ ?>
    <h1 class="text-center">Richiedi un contatto</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="contatto.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nominativo" class="form-label">Nominativo</label>
                        <input type="text" class="form-control" id="nominativo" name="nominativo">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="messaggio" class="form-label">Messaggio</label>
                        <textarea class="form-control" id="messaggio" name="messaggio" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Richiedi Contatto</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>


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
    function printData($label, $value){
        $sanitized_value = htmlentities($value);
        print "<div>$label: <span class=\"text-bold\">$sanitized_value</span></div>";
    }

?>