<?php
include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$mensagem = filter_input (INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);


$instrucaoSQL = "INSERT INTO contato (Nome, Email, Mensagem) VALUES ('$nome', '$email', '$mensagem')";
$resultado_usuario = mysqli_query($conn, $instrucaoSQL);

header("Location: index.php");