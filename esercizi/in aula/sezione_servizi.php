<?php
//esercizio 2
//valorizzare un array nominato $servizi con 3 elementi ciascuno formato da un array
//ogni elemento avrà gli indici:nome, icona (font awesome), descrizione
//visualizzare i servizi 3 colonne su desktop / 1 colonna su mobile  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sezione Servizi</title>
  </head>
  <body>
    <h1 class="text-center my-4">Servizi</h1>
    <div class="container">
        <div class="row">
            <?php 
                $arServizi = [
                    [
                        'nome'=> 'Sviluppo Web',
                        'icona'=> 'fa-brands fa-connectdevelop',
                        'descrizione'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it '
                    ],
                    [
                        'nome'=> 'Sviluppo App',
                        'icona'=> 'fa-solid fa-code',
                        'descrizione'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it '
                    ],
                    [
                        'nome'=> 'Sviluppo Software',
                        'icona'=> 'fa-solid fa-laptop-code',
                        'descrizione'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it '
                    ],
                ];
                print creaCard($arServizi[0]);
                print creaCard($arServizi[1]);
                print creaCard($arServizi[2]);
            ?>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php 
    function creaCard($ar){
        return <<<EOD
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card d-flex align-items-center">
            <i class="{$ar['icona']} fa-4x"></i>
            <div class="card-body">
            <h5 class="card-title">{$ar['nome']}</h5>
            <p class="card-text">{$ar['descrizione']}</p>
            </div>
        </div>
      </div>
EOD;
    }

?>