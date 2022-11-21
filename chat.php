<?php

include('conexao.php');
$sql_code = "SELECT * FROM feedbacks INNER JOIN cliente on feedbacks.idCliente = cliente.IdCliente ORDER BY idFeedback desc";
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL" . $conn->error);

while( $exibir = mysqli_fetch_array($sql_query)){
    echo $exibir['Nome']. ": ";
    echo $exibir['mensagem'];
    echo "</br><hr>";
}

//SELECT * FROM feedbacks INNER JOIN cliente on feedbacks.idCliente = cliente.IdCliente