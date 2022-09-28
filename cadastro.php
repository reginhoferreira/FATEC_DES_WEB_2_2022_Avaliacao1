<?php 

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

if (isset($_POST['marca']) and isset($_POST['ano']) and isset($_POST['placa']) and isset($_POST['chassi'])){
    $_POST['marca'];
    $_POST['ano'];
    $_POST['placa'];
    $_POST['chassi'];
    $filename = "arquivos.txt";
    if(!file_exists("arquivos.txt")){
        $handle = fopen("arquivos.txt", "w");
    } else {
        $handle = fopen("arquivos.txt", "a");
    }
    
    fwrite($handle, $_POST['marca'] . "\n");
    fwrite($handle,$_POST['ano'] ."\n"); 
    fwrite($handle,$_POST['placa'] . "\n");
    fwrite($handle,$_POST['chassi'] . "\n");
    fflush($handle);
    fclose($handle);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<div class="col-md-6">
    <div class="wrapper">
        <h2>Cadastro de Automoveis semi-novos</h2>
        <p>Realize o cadastro</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label>Marca</label>
                <input type="text" name="marca" class="form-control">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Ano</label>
                <input type="text" name="ano" class="form-control">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Placa</label>
                <input type="text" name="placa" class="form-control">
                <span class="help-block"></span>
            </div> 
            <br>   
            <div class="form-group">
                <label>numero chassis</label>
                <input type="cpf" name="chassi" class="form-control">
                <span class="help-block"></span>
            </div>

        
            <br>
            <input type="submit" class="btn btn-success" value="Cadastrar">
            <a href="bem_vindo.php" class="btn btn-primary">Voltar</a>
        </form>
    </div>  
</div>  
</body>
</html>