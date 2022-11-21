<?php 
include_once("conexao.php");
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

$comentario = filter_input (INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
$idCliente = $_SESSION['id'];
date_default_timezone_set('America/Sao_Paulo');
$hoje = date('Y-m-d H:i');

if($comentario != ""){
    if(!isset($_SESSION['id'])) {
        header("Location: cadastro.php");
    }else{
        $instrucaoSQL = "INSERT INTO Feedbacks (dataCriacao, mensagem, idCliente) VALUES ('$hoje', '$comentario', '$idCliente')";
        $resultado_usuario = mysqli_query($conn, $instrucaoSQL);}
    }


?>

<script type="text/javascript">
function ajax(){
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if (req.readyState == 4 && req.status == 200){
            document.getElementById('chat').innerHTML = req.responseText;
        }
    }
    req.open('GET', 'chat.php', true);
    req.send();
}
setInterval(function(){ajax();}, 1000);
</script>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="shortcut icon" href="imagens\favicon.ico" type="image/x-icon">
    <title>DevCake Casamento</title>
</head>
<body class="fundo">
    <div id="menu">
        <nav>
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php#carrosel">SERVIÇOS</a></li>
                <li><a href="index.php#quem-somos">QUEM SOMOS</a></li>
                <li><a href="index.php#contatos">CONTATOS</a></li>
                <li><a href="<?php echo $link?>"><?php echo $mensagem;?></a></li>
            </ul>
        </nav>
    </div>
    <br><br>
    <h1 id="cabeçalho">Bolos de casamento</h1>
<section id="organizar-quadrado">
    <div id="coluna">
    <div class="bolo-box">
        <img src="https://images-ext-2.discordapp.net/external/kdN5UusbcjGuG_aAGMa3sA8kH0H3SSt7-uH3ansyjwc/%3Fw%3D740%26t%3Dst%3D1668225006~exp%3D1668225606~hmac%3De46adbe35e2969e883b9575134367036c198765f759e3ec2e7dfbe4a749af578/https/img.freepik.com/fotos-gratis/bolo-de-casamento-decorado-com-rosas-vermelhas_8353-10486.jpg?width=462&height=693"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho" >
        <h3 class="nome-casamento">Bolo de casamento</h3>
        <a class="btn-bolos">Tema 1</a>
    </div>
    </div>

    <div id="coluna">
    <div class="bolo-box">
        <img src="https://images-ext-2.discordapp.net/external/jwODt-bzZvWsd7P6jH9klG4IASIIdPigYVjB3gUxMfc/https/casamento.biz/wp-content/uploads/2018/01/ideias-criativas-parabolo-de-casamento.jpg?width=732&height=488"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
        <h3 class="nome-casamento">Bolo de casamento</a></h3>
        <a  class="btn-bolos">Tema 2</a>
    </div>
    </div>

    <div id="coluna">
    <div class="bolo-box">
        <img src="https://images-ext-2.discordapp.net/external/aK84TFtGj6MQHm9EtzdbBObz3sAnaT5kWrt74LwbRVI/https/escolaeducacao.com.br/wp-content/uploads/2019/05/bolos-criativos-17-1.jpg?width=519&height=693"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
        <h3 class="nome-casamento"> Bolo de casamento</a></h3>
        <a class="btn-bolos">Tema 3</a>
    </div>
    </div>

    <div id="coluna">
    <div class="bolo-box">
        <img src="https://images-ext-1.discordapp.net/external/w7JuuJ_pnLMcELigilsHQyC3h-xcMmiA_rr2UknzNmQ/http/guiadanoiva.com.br/wp-content/uploads/2014/11/BOLO-DE-CASAMENTO-2.jpg?width=462&height=693"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
        <h3 class="nome-casamento"> Bolo de casamento</a></h3>
        <a  class="btn-bolos">Tema 4</a>
    </div>
    </div>
</section>

<section id="organizar-quadrado">
    <div id="coluna">
    <div class="bolo-box">
        <img src="https://www.noivasdoriodejaneiro.com.br/wp-content/uploads/2020/06/Captura-de-Tela-2020-06-30-a%CC%80s-10.28.13.png"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho" >
        <h3 class="nome-casamento">Bolo de casamento</h3>
        <a class="btn-bolos">Tema 5</a>
    </div>
    </div>

    <div id="coluna">
    <div class="bolo-box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQVwCYIaXMNHbeozckryr1FPWPCxG8gaV0Uw&usqp=CAU"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
        <h3 class="nome-casamento">Bolo de casamento</a></h3>
        <a  class="btn-bolos">Tema 6</a>
    </div>
    </div>

    <div id="coluna">
    <div class="bolo-box">
        <img src="https://festas.site/wp-content/uploads/2019/12/6-bolo-de-1-andar-com-cobertura-de-chantilly.jpg"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
        <h3 class="nome-casamento"> Bolo de casamento</a></h3>
        <a class="btn-bolos">Tema 7</a>
    </div>
    </div>

    <div id="coluna">
    <div class="bolo-box">
        <img src="https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2022/05/15/705960252-bolocomflores.jpg"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
        <h3 class="nome-casamento"> Bolo de casamento</a></h3>
        <a  class="btn-bolos">Tema 8</a>
    </div>
    </div>
</section>
    <br>
    <div id="btn-montar">
    <a href="encomendar.php" target="_blannk">Montar bolo</a>
    </div>

       <div class="scroll-bg">
            <div class = "scroll-div">
                <div id="chat" object = "scroll-object">
                </div>
            </div>
            <article class="comment-box">
            <form action = "" method = "post">
                <textarea name ="comment" placeholder="seu feedback"></textarea>
                <button class = "comment-submit">Enviar</button>
                </form>
            </article>
       </div>

        <div class= "comment-session">
            <div post= "post-comment">
                <div list= "list">
      	            <div user = "user">
                        <div class = "user-meta">
                        </div>
      	            </div>        
                </div>	
            </div>
	    </div>

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