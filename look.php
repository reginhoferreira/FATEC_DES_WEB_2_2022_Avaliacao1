<?php
$filename = "arquivos.txt";
if(!file_exists("arquivos.txt")){
  echo "Nao existe pessoas cadastradas";
} else {
    $handle = fopen("arquivos.txt", "r");
}


$handle = fopen("arquivos.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
?>