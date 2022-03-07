<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $stringaOriginale = "<script>alert('titolo principale')</script>";
        // //print $stringaOriginale;
        // $stringa_con_html_entities = htmlentities($stringaOriginale);
        // print $stringa_con_html_entities;
        //print html_entity_decode($stringa_con_html_entities);
        //print nl2br("questa è una stringa \n che va su più righe");
        //print ($_SERVER['QUERY_STRING']);
        // $ar = explode("&",$_SERVER['QUERY_STRING']);
        // foreach ($ar as $item){
        //     print_r(explode("=",$item));
        // }
        // parse_str($_SERVER['QUERY_STRING'],$ar);
        // print_r($ar);
        $messaggio = "<strong>ciao a tutti</strong><p>questo ok</p><script>alert('fregato!!')</script>";
        print strip_tags($messaggio,"<p><strong>");
        //print $messaggio;
    ?>
</body>
</html>