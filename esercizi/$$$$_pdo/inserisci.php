<?php 
    include_once("bootstrap.inc.php");
    include_once("head.inc.php");
    include_once("body.inc.php");
    if (isset($_REQUEST["nome"])){
      
      try {
        $pdo->beginTransaction();
        $prepared = $pdo->prepare("INSERT INTO servizi 
        (nome,icona,descrizione) 
        VALUES
        (:nome, :icona, :descrizione)");
        $prepared->bindParam(':nome', $_REQUEST["nome"]);
        $prepared->bindParam(':icona', $_REQUEST["icona"]);
        $prepared->bindParam(':descrizione', $_REQUEST["descrizione"]);
        $prepared->execute();
        $pdo->commit();
      }catch (PDOException $e){
        $pdo->rollBack();
        die (message('danger', $e->getMessage()));
      }
      message('success',"Record inserito con successo");
      print "<meta http-equiv=\"refresh\" content=\"3; URL='./$$$\$_pdo.php\" />";

    }else{
      form();
    }
?>
        </section>
    </section>
<?php include_once("body-end.inc.php");