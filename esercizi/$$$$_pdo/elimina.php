<?php 
    include_once("bootstrap.inc.php");
    include_once("head.inc.php");
    include_once("body.inc.php");
    if (isset($_REQUEST["id_servizio"])){      
      try {
        $pdo->beginTransaction();
        $prepared = $pdo->prepare("DELETE FROM servizi WHERE id_servizio = :id_servizio limit 1");
        $prepared->bindParam(':id_servizio', $_REQUEST["id_servizio"]);
        $prepared->execute();
        $pdo->commit();
      }catch (PDOException $e){
        $pdo->rollBack();
        die (message('danger', $e->getMessage()));
      }
      message('success',"Record eliminato con successo");
      print "<meta http-equiv=\"refresh\" content=\"3; URL='./$$$\$_pdo.php\" />";
    }else{
      //lettura
      message('danger',"Errore in cancellazione");
      print "<meta http-equiv=\"refresh\" content=\"3; URL='./$$$\$_pdo.php\" />";
    }
?>
        </section>
    </section>
<?php include_once("body-end.inc.php");