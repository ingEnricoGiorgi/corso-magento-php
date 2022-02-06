<?php
/**
 * stampare il nome e tutto il contenuto della directory di livello superiore ../
 */
$dir = chdir("../");
print getcwd();

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
?>




