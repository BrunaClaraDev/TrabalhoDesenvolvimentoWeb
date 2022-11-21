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
    <link rel="shortcut icon" href="imagens\favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="script.js"></script>
    <title>DevCake Chá</title>
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
    <h1 id="cabeçalho">Bolos de chá</h1>
    <section id="organizar-quadrado">
    <div id="coluna">
    <div class="bolo-box">
        <img src="https://i.pinimg.com/736x/2c/bc/37/2cbc3729ae60bff2d30bf37eab3e5032.jpg"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho" >
        <h3 class="nome-casamento">Bolo para chá revelação</a></h3>
        <a  class="btn-bolos">Tema 1</a>
    </div>
    </div>
    <div id="coluna">
        <div class="bolo-box">
            <img src="https://www.festas.biz/wp-content/uploads/2019/03/bolo-cha-revela%C3%A7%C3%A3o-19.jpg"
            width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
            <h3 class="nome-casamento">Bolo para chá revelação</a></h3>
            <a class="btn-bolos" >Tema 2</a>
        </div>
        </div>
    <div id="coluna">
    <div class="bolo-box">
    <img src="https://i.pinimg.com/736x/f8/71/f3/f871f3a0fa68c4a85a7cacbc568f3e5f.jpg"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
    <h3 class="nome-casamento">Bolo para chá de baby</a></h3>
    <a  class="btn-bolos" >Tema 3</a>
    </div>
    </div>
    <div id="coluna">
    <div class="bolo-box">
    <img src="https://cdn.shopify.com/s/files/1/2412/4855/t/2/assets/bolo-de-cha-de-bebe-117-ideias-tematicas-e-neutras-para-a-sua-festa-8615.jpg?8480188480373169124"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
    <h3 class="nome-casamento">Bolo para chá de baby</h3>
    <a class="btn-bolos" >Tema 4</a>
    </div>
    </div>
</section>

<section id="organizar-quadrado">
    <div id="coluna">
    <div class="bolo-box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaFXck4shCztp5GbbhUANSaFlbyqRhMajpMQ&usqp=CAU"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho" >
        <h3 class="nome-casamento">Bolo para chá de baby</a></h3>
        <a  class="btn-bolos">Tema 5</a>
    </div>
    </div>
    <div id="coluna">
        <div class="bolo-box">
            <img src="https://sonhodocerj.files.wordpress.com/2014/03/blog_b277_bolo_cha-de-bebe_trio-de-poas-com-sapatinhos_0919092.jpg?w=610"
            width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
            <h3 class="nome-casamento">Bolo para chá de baby</a></h3>
            <a class="btn-bolos" >Tema 6</a>
        </div>
        </div>
    <div id="coluna">
    <div class="bolo-box">
    <img src="http://3.bp.blogspot.com/-v0lAoi9cAic/VmXQ-GOdmSI/AAAAAAAAUw4/h3mG7JNQepw/s1600/bolo%2Bch%25C3%25A1%2Bde%2Bcozinha%2B%25284%2529.jpg"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
    <h3 class="nome-casamento">Bolo para chá de cozinha</a></h3>
    <a  class="btn-bolos" >Tema 7</a>
    </div>
    </div>
    <div id="coluna">
    <div class="bolo-box">
    <img src="https://bonitabolos.com/wp-content/gallery/cha-de-panela/bolochabulerosa.jpg"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
    <h3 class="nome-casamento">Bolo para chá de cozinha</h3>
    <a class="btn-bolos" >Tema 8</a>
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
<br>
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