<?php 
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['id'])) {
    $link = "cadastro.php";
    $mensagem = "ENTRAR";
}else{
    $link = "sair.php";
    $mensagem = "SAIR";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="style.css">
    <link rel="shortcut icon" href="imagens\favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="script.js"></script>
    <title>DevCake Recuperar Senha</title>
</head>
<body class="fundo">
    <div id="menu">
        <nav>
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php#carrosel">SERVIÇOS</a></li>
                <li><a href="index.php#quem-somos">QUEM SOMOS</a></li>
                <li><a href="index.php#contatos">CONTATOS</a></li>
                <li onclick="Alerta('<?php echo $mensagem;?>')"><a href="<?php echo $link?>"><?php echo $mensagem;?></a></li>
            </ul>
        </nav>
    </div>
        <br><br>
        <section class="senha">
        <h1>Recuperação de Senha</h1>
        <form method="POST" action="recuperarSenha.php">
            <input type="text" name="nome" placeholder="Confirme seu nome" id="senha"><br><br>
            <input type="email" name="email" placeholder="Confirme seu email" id="senha"><br><br>
            <input type="password" name="senha" placeholder="Nova senha" id="senha" ><br><br>
            <input name="salvar" type="submit" value="salvar" id="senha" onclick="Alerta('recupera')">
        </form>
        </section>
    <footer id="rodape">
	<div id="mapa"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.199030025644!2d-38.5771068852409!3d-3.7668214972595915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1664822345597!5m2!1spt-BR!2sbr"  allowfullscreen=""   width="98%" height="400"   style="top: 0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div id="letras">
                <h2>Loja Parangaba:</h2>
                <h3>Av. Senador Fernades Távora,137 -</h3>
                <h3>Jóquei Clube,Fortaleza-CE,60510-111</h3>
                <h4>Horario De Funcionamento:</h4>
                <h4>7:00 AM / 22:00PM</h4>
                </div>
        </footer>
</body>
</html>