<?php

include_once("conexao.php");
//cadastrar
$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input (INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input (INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

$instrucaoSQL = "INSERT INTO Cliente (Nome, Email, Endereco, Telefone, Senha) VALUES ('$nome', '$email', '$endereco', '$telefone', '$senha')";
$resultado_usuario = mysqli_query($conn, $instrucaoSQL);

//logar
if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    }else{
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL" . $conn->error);

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
                $_SESSION['id'] = $usuario['IdCliente'];
                $_SESSION['nome'] = $usuario['Nome'];
                header("Location: index.php");
            }
            
        }else{
        echo "Falha ao logar! Email ou senha incorretss.";
        }   
    }
}
?>


