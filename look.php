<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$filename = "arquivos.txt";
if(!file_exists("arquivos.txt")){
    header("location: bem_vindo.php");
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