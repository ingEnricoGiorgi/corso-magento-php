<!-- creare una tabella 8x8 avente in progressione partendo dalla prima cella con il numero 1 successivamente la seconda il 2... l'ultima cella dovrà avere il 64 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, tr, td {
            border: 1px solid black;
            min-width: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
    <?php
        $nRow=8;
        $nCol=8;
        for ($iR = 1; $iR <= $nRow; $iR++){
            print "<tr>";
            for ($iC = 1; $iC <= $nCol; $iC++){
                $num=($nRow * ($iR - 1)) + $iC;
                print "<td>{$num}</td>";
            }            
            print "</tr>";
        }
    ?>    
    </table>
</body>
</html>