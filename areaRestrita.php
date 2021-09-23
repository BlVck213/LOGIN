<?php

session_start();

require_once("./funcoes.php");

// $dados = lerArquivo("dados/usuarios.json");

// // realizarLogin("cristiano" , "123456" , $dados);

// realizarLogin("maria" , "654321" , lerArquivo("dados/usuarios.json"));

// echo "NOME USUARIO: " . $_SESSION["usuario"] ."<br />";
// echo "ID SESSAO: " . $_SESSION["id"] ."<br />";

validarLogin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Área Restrita</title>
</head>
<body>
    
    <h1>ÁREA RESTRITA</h1>
    
    <div class='toolbar'>

        <h2>

            <?php echo 'Olá ' . strtoupper($_SESSION['usuario']) . ' - Login efetutado em: ' .$_SESSION['data_hora']; ?>
        
        </h2>

        <h2>

           <a class="material-icons" href="processa_login.php?logout=true">logout</a>
        
        </h2>

    </div>

</body>
</html>