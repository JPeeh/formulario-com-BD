<?php

$hostname = "localhost";
$bancodedados = "formulario";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

// if ($conexao->connect_errno) 
// {
//     echo "falha ao conectar";
// }

// echo "Conectado ao Banco de Dados";

?>