<?php

if(isset($_POST['submit']))
{

    include('conexao.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $instagram = $_POST['instagram'];
    $site = $_POST['site_empresa'];

    $result = mysqli_query($conexao, "INSERT INTO clientes (nome,telefone,email,instagram,site_empresa) VALUES ('$nome','$telefone','$email','$instagram','$site')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>formulario enviado</h1>
    
</body>
</html>