<?php
    //dato un array multidimensionale di nomi, inserire 2 nuovo elemento nell'array tramite array_push
    $ar=[
        ['nome' => 'Carlo', 'cognome' => 'Sanchi'],
        ['nome' => 'Silvia', 'cognome' => 'Bianchi'],
        ['nome' => 'Chiara', 'cognome' => 'Pani'],
    ];

    array_push($ar, ['nome' => 'Gianni', 'cognome' => 'Marini'],['nome' => 'Marco', 'cognome' => 'Luppi']);

    print_r($ar);