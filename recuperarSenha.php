<?php
include('conexao.php');

if(isset($_POST['salvar'])){
    $email = $conn->real_escape_string($_POST['email']);
    $novasenha = $conn->real_escape_string($_POST['senha']);
    $nome = $conn->real_escape_string($_POST['nome']);

    $sql_code = "SELECT * FROM cliente WHERE email = '$email' AND nome = '$nome'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL" . $conn->error);
    $quantidade = $sql_query->num_rows;
    $usuario = $sql_query->fetch_assoc();

    if($quantidade == 0){
        echo "O email ou nome informado não existe no banco de dados!";
    }

    if($quantidade > 0){
        $sql_code = "UPDATE cliente SET senha = '$novasenha' WHERE email = '$email' AND nome = '$nome'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL" . $conn->error);
        header("Location: entrar.php");
    }

}