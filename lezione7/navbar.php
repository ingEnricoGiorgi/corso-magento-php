
<?php
include_once ("./database.php");
$result=leggiMenu();
$item=null;
while($row = mysqli_fetch_assoc($result)){
    $nome=$row["nome"];
    $link=$row["link"];
$item .= <<<EOD
 <li> 
  <a href="$link">$nome </a>&nbsp; | &nbsp;
 </li>
EOD;

}
?>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <?php echo " ".$item; ?>

                </ul>
            </div>
        </div>
    </nav>
</div>