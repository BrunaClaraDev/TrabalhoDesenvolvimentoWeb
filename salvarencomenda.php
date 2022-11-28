<?php
include_once("conexao.php");
if(!isset($_SESSION)){
    session_start();

}

$andares = filter_input (INPUT_POST, 'andares', FILTER_SANITIZE_STRING);
$dataEvento = filter_input (INPUT_POST, 'dataSolicitada', FILTER_SANITIZE_STRING);
$valor = filter_input (INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
$decoracao = filter_input (INPUT_POST, 'decoracao', FILTER_SANITIZE_STRING);
$massa = filter_input (INPUT_POST, 'massas', FILTER_SANITIZE_STRING);
$recheio = filter_input (INPUT_POST, 'recheios', FILTER_SANITIZE_STRING);
$entrega = filter_input (INPUT_POST, 'entrega', FILTER_SANITIZE_STRING);
$idCliente = $_SESSION['id'];

$instrucaoSQL = "INSERT INTO Encomendas (andares, dataEvento, decoracao, massa, recheio, idCliente, entrega, valor) VALUES ('$andares', '$dataEvento', '$decoracao', '$massa', '$recheio', '$idCliente', '$entrega', '$valor')";
$resultado_usuario = mysqli_query($conn, $instrucaoSQL);

header("Location: index.php");
