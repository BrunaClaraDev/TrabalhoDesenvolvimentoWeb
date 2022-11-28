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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>DevCake Confeitaria</title>
</head>
<body class="fundo">
    <div id="menu">
        <nav>
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#carrosel">SERVIÇOS</a></li>
                <li><a href="#quem-somos">QUEM SOMOS</a></li>
                <li><a href="#contatos">CONTATOS</a></li>
                <li onclick="Alerta('<?php echo $mensagem;?>')"><a href="<?php echo $link?>"><?php echo $mensagem;?></a></li>
            </ul>
        </nav>
    </div>
    <br><br><br><br><br><br><br><br>

    <section class="carrossel" id="carrosel">

    <div class="slider">
    
    <div class="slides">
                    <!-- botão radio-->
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">
    
            <!--------slide imagens-------->
    <div class="slide first">
        <a href="casamento.php">
    <img src="http://s3-us-west-2.amazonaws.com/blog-organize/wp-content/uploads/2019/08/09122814/bolocasamento-Copia-1080x675.jpg"    alt="imagem 1"/>
    </a></div>
    
    <div class="slide">
        <a href="cha.php">
    <img src="https://images-ext-1.discordapp.net/external/yw2dJL3d-KO5zMJhLUh-dFjQvlhjAECM6p_47pMDCo8/https/www.dicasdemulher.com.br/wp-content/uploads/2019/12/bolo-revelacao-15.jpg?width=693&height=693" alt="imagem 2" /></a></div>
    
    <div class="slide">
        <a href="aniversario.php">
    <img src="https://images-ext-1.discordapp.net/external/GHInZr5B5PeHz1PJiSgQXk4mbeTJ5C5MhjXlD4woh6Y/https/i.pinimg.com/736x/37/5f/62/375f622882dd3ba8ccd338007873fdcc.jpg?width=693&height=693" alt="imagem 3" /></a></div>
    
    <div class="slide">
        <a href="diversos.php">
    <img src="https://bolosparavender.com.br/wp-content/uploads/2019/10/bolo-drip-cake-simples-de-morango-1200x950.jpg" alt="imagem 4" /></a></div>
    
                    <!--fim dos slides-->
    
    <div class="navigation-auto">
    <div class="auto-btn1"></div>
    <div class="auto-btn2"></div>
    <div class="auto-btn3"></div>
    <div class="auto-btn4"></div>
        </div>
    </div>
    
        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
                
        </div>
    </section>
        <script src="script.js"></script>
    </section>
    <br><br><br><br><br><br><br>
                            <!-- Quem somos -->
<h1 id="cabeçalho">Quem Somos</h1>
<section id="quem-somos">
<div id="coluna-quem">
<div class="somos-box">
    <img src="imagens\foto Mateus.jpeg"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho-somos" >
    <h3>Mateus Vitor</h3>
    <h4>Análise e Desenvolvimento <br> de Sistemas</h4>
</div>
</div>
<div id="coluna">
    <div class="somos-box">
        <img src="imagens\foto bruna 2.jpeg"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho-somos">
        <h3> Bruna Clara</h3>
        <h4>Análise e Desenvolvimento 
           <br> de Sistemas</h4>
    </div>
    </div>
<div id="coluna">
<div class="somos-box">
<img src="imagens\foto fabricio.jpeg"
width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho-somos">
<h3>Paulo Fabricio</h3>
<h4>Análise e Desenvolvimento <br> de Sistemas</h4>
</div>
</div>
<div id="coluna">
<div class="somos-box">
<img src="imagens\foto alysson.jpeg"
width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho-somos">
<h3>Alysson Lima</h3>
<h4>Análise e Desenvolvimento <br> de Sistemas</h4>
</div>
</div>

<br><br>
</section>
<br><br>

<section id="contatos" class="contatos">
    <div id="contate">
            <h1>Contate-nos</h1>
            <form action= "salvarContato.php" method="post">
            <input type="text" name="nome" placeholder="Seu nome" autocomplete="off" required>
            <br><br>
            <input type="email" name="email" placeholder="Seu e-mail" autocomplete="off" required>
            <br><br>
            <input type="message" cols="30" rows="10" name ="mensagem" placeholder="Digite sua mensagem" required>
            <br><br>
            <button type = "submit" class="submit-button" onclick="Alerta('contato')">Enviar</button>
            </form></div>
            <div id="logo">
            <img src="imagens\logo devcake.jpeg" alt="logo" width="635px"   height="340px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho-somos" >
        </div>
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