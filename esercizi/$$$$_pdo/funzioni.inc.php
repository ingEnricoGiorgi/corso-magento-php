<?php
    if (! function_exists('form')) {
        function form(array $ar = null){
            $nome = $ar['nome'] ?? null;
            $icona = $ar['icona'] ?? null;
            $descrizione = $ar['descrizione'] ?? null;
            $id_servizio = $ar['id_servizio'] ?? null;
    print <<<EOD
      <section class="container">
        <div class="row">
            <div class="col-12">
              <form name="form" action="#" method="POST">
              <input type="hidden" value="{$_SESSION['token']}" name="token">
              <input type="hidden" value="$id_servizio" name="id_servizio">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="$nome" >
              </div>
              <div class="form-group">
                <label for="icona">Icona</label>
                <input type="text" class="form-control" id="icona" name="icona" value="$icona">
              </div>
              <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="descrizione" rows="3">$descrizione</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Salva</button>
            </form>    
          </div>
        </div>
      </section>
EOD;
    }
}