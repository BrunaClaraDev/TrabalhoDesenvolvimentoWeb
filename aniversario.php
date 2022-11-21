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
    <title>DevCake Aniversário</title>
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
    </section>
<h1 id="cabeçalho">Bolos de aniversario</h1>
<section id="organizar-quadrado">
<div id="coluna">
<div class="bolo-box">
    <img src="https://images-ext-2.discordapp.net/external/xI4oBdi5hKffRlC5RUaE3sJikL4OasmmFRSbtMliyqs/https/i.pinimg.com/736x/3d/7f/20/3d7f20f8322d7fce3182b3a54445f0a7.jpg?width=520&height=693"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho" >
    <h3 class="nome-casamento">Bolo de Aniversário</h3>
    <a  class="btn-bolos">Tema 1</a>
</div>
</div>
<div id="coluna">
    <div class="bolo-box">
        <img src="https://images-ext-1.discordapp.net/external/ansgKlICtKwV4LwY6jKxz_Yz_tB-nLgUgv65ufraLQk/https/www.mundodasfestas.com.br/wp-content/uploads/2022/05/bolo-de-aniversario-feminino-02-730x730.jpg?width=693&height=693"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
        <h3 class="nome-casamento">Bolo de Aniversário</h3>
        <a class="btn-bolos">Tema 2</a>
    </div>
    </div>
<div id="coluna">
<div class="bolo-box">
<img src="https://images-ext-1.discordapp.net/external/Vz12ZyDGI2VhuHhBRQnDfta9EL4wJRyWx5Z4rsY3_yQ/https/i.pinimg.com/736x/50/f3/cf/50f3cfdb410ead0d3ab781a21be5b2ca.jpg?width=612&height=693"
width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
<h3 class="nome-casamento">Bolo de Aniversário</h3>
<a  class="btn-bolos" >Tema 3</a>
</div>
</div>
<div id="coluna">
<div class="bolo-box">
<img src="https://images-ext-1.discordapp.net/external/GHInZr5B5PeHz1PJiSgQXk4mbeTJ5C5MhjXlD4woh6Y/https/i.pinimg.com/736x/37/5f/62/375f622882dd3ba8ccd338007873fdcc.jpg?width=693&height=693"
width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
<h3 class="nome-casamento">Bolo de Aniversário</h3>
<a class="btn-bolos" target="_blank">Tema 4</a>
</div>
</div>

<br><br>
</section>

<section id="organizar-quadrado">
<div id="coluna">
<div class="bolo-box">
    <img src="https://img.elo7.com.br/product/main/361F03D/arquivo-de-corte-topo-de-bolo-feliz-aniversario-flores-arquivo-de-corte-topo-de-bolo-feliz-aniversar.jpg"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho" >
    <h3 class="nome-casamento">Bolo de Aniversário</h3>
    <a  class="btn-bolos">Tema 5</a>
</div>
</div>
<div id="coluna">
    <div class="bolo-box">
        <img src="https://i.pinimg.com/564x/7a/f4/c3/7af4c3571b8d472d213b47af8f0a9e45.jpg"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
        <h3 class="nome-casamento">Bolo de Aniversário</h3>
        <a class="btn-bolos">Tema 6</a>
    </div>
    </div>
<div id="coluna">
<div class="bolo-box">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6mf3bjvKcxd7FyeMWgXzqZlzw3qFu3vr_bA&usqp=CAU"
width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
<h3 class="nome-casamento">Bolo de Aniversário</h3>
<a  class="btn-bolos" >Tema 7</a>
</div>
</div>
<div id="coluna">
<div class="bolo-box">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkIZRxRT5cs1_nNWO7MtPM8L4K9cvrt1nHyA&usqp=CAU"
width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
<h3 class="nome-casamento">Bolo de Aniversário</h3>
<a class="btn-bolos" target="_blank">Tema 8</a>
</div>
</div>

<br>
</section>
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