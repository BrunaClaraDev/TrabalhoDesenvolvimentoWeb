<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "devcake";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if($conn->error){
    die("Falha ao conectar com o banco de dados: " . $conn->error);
}

?>