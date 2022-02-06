<!-- realizzare un layout come da immagini mobile e desktop 
CREATE TABLE `servizi` (
  `id_servizio` bigint(20) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `icona` varchar(30) DEFAULT NULL,
  `descrizione` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->
<?php 
    include_once("bootstrap.inc.php");
    include_once("head.inc.php");
    include_once("body.inc.php");
?>


     
     <section id="motto">
         <h2>DEMO PDO</h2>
         <div class="pellicola"></div>
     </section>
     <section id="servizi" class="container">
        <h2 class="section">I Nostri Servizi</h2>
        <section id="servizi-article"> <!-- display: flex -->
<?php
        try{ 
            $stm = $pdo->query('SELECT * FROM servizi');
            $rows = $stm->fetchAll();
        }catch (Exception $e){
            die (message('danger', $e->getMessage()));
        }        
        // iterate over array by index and by name
        foreach($rows as $row) {
            print <<<EOD
            <article class="servizio">
                <i class="fas {$row['icona']} fa-3x"></i>
                <header>
                    <h3>{$row['nome']}</h3>
                </header>
                <p>
                {$row['descrizione']}
                </p>
                <a class="btn btn-primary" href="./modifica.php?id_servizio={$row['id_servizio']}">Modifica</a>
                <a class="btn btn-danger" href="./elimina.php?id_servizio={$row['id_servizio']}">Elimina</a>
            </article>
EOD;
        }
?>
        </section>
    </section>
<?php include_once("body-end.inc.php");