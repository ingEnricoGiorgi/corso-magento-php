<?php 
    include_once("bootstrap.inc.php");
    include_once("head.inc.php");
    include_once("body.inc.php");
    if (isset($_REQUEST["nome"])){
      
      try {
        $pdo->beginTransaction();
        $prepared = $pdo->prepare("UPDATE servizi SET 
        `nome` = :nome,
        `icona` = :icona,
        `descrizione` = :descrizione
        WHERE id_servizio = :id_servizio limit 1");

        $prepared->bindParam(':nome', $_REQUEST["nome"]);
        $prepared->bindParam(':icona', $_REQUEST["icona"]);
        $prepared->bindParam(':descrizione', $_REQUEST["descrizione"]);
        $prepared->bindParam(':id_servizio', $_REQUEST["id_servizio"]);
        $prepared->execute();
      }catch (PDOException $e){
        $pdo->rollBack();
        die (message('danger', $e->getMessage()));
      }
      $pdo->commit();
      message('success',"Record modificato con successo");
      print "<meta http-equiv=\"refresh\" content=\"3; URL='./$$$\$_pdo.php\" />";
    }else{
      //lettura
      try {
        $prepared = $pdo->prepare("SELECT * FROM servizi WHERE id_servizio = :id_servizio");
        $prepared->bindParam(':id_servizio', $_REQUEST["id_servizio"]);
        $prepared->execute();
        $result = $prepared->fetch();

        if($result) {
          form($result);
        }
      }catch (PDOException $e){
        die (message('danger', $e->getMessage()));
      }
  
    }
?>
        </section>
    </section>
<?php include_once("body-end.inc.php");