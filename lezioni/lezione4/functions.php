<?php
//print $msg;
function scriviMessaggio($messaggio, $type){
        return <<<EOD
        <div class="alert alert-$type" role="alert">
            <h3 class="display-5 text-center">
                $messaggio
            </h3>
        </div>          
EOD;
    }