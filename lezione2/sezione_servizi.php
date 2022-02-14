<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </script>
    <title>Document</title>
</head>
<body>
<h1 class="display-3 text-center">Servizi</h1>
    <div class="container">
        <div class="row">
        <?php
/*
//esercizio 2
//valorizzare un array nominato $servizi con 3 elementi ciascuno formato da un array
//ogni elemento avrà gli indici:nome, icona (font awesome), descrizione
//visualizzare i servizi 3 colonne su desktop / 1 colonna su mobile  
*/  //****************css nell head e javscript bootstrap nel body

$servizi=[
    ['nome' =>'nomeservizio1', 'icona' => 'fa-solid fa-0', 'descrizione' => 'descrizioneservizio1'],
    ['nome' =>'nomeservizio2', 'icona' => 'fa-solid fa-0', 'descrizione' => 'descrizioneservizio2'],
    ['nome' =>'nomeservizio3', 'icona' => 'fa-solid fa-0', 'descrizione' => 'descrizioneservizio3']

];

?>


            <?php print creaCard($servizi[0]['nome'],$servizi[0]['icona'],$servizi[0]['descrizione']) ?>
            <?php print creaCard($servizi[1]['nome'],$servizi[1]['icona'],$servizi[1]['descrizione']) ?>
            <?php print creaCard($servizi[2]['nome'],$servizi[2]['icona'],$servizi[2]['descrizione']) ?>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
<?php 
    function creaCard($nome, $icona, $descrizione){
        return <<<EOD
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
            <i class="fa-solid fa-code"></i>
            <i class="fa-solid fa-0"></i>
            <div class="card-body">
            <h5 class="card-title">$nome</h5>
            <p class="card-text">$descrizione</p>
            <a href="#" class="btn btn-outline-secondary">Scopri di Più</a>
            </div>
        </div>
      </div>
EOD;
    }
?>

