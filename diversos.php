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
    <title>DevCake Diversos</title>
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
    <h1 id="cabeçalho">Bolos diversos</h1>
    <section id="organizar-quadrado">
    <div id="coluna">
    <div class="bolo-box">
        <img src="https://bolosparavender.com.br/wp-content/uploads/2019/10/bolo-drip-cake-simples-de-morango-1200x950.jpg"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho" >
        <h3 class="nome-casamento">Bolos diversos</h3>
        <a class="btn-bolos">Tema 1</a>
    </div>
    </div>
    <div id="coluna">
        <div class="bolo-box">
            <img src="https://todaatual.com/wp-content/uploads/4363ce779325a909048eed4dd15ae6e9.jpg"
            width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
            <h3 class="nome-casamento">Bolos diversos</h3>
            <a  class="btn-bolos" >Tema 2</a>
        </div>
        </div>
    <div id="coluna">
    <div class="bolo-box">
    <img src="https://2.bp.blogspot.com/-f_pTv-5qT_E/UtvwVj2SKtI/AAAAAAAAFOQ/rNqiQoGci2o/s1600/2012_05_08_999_95.neopolitan-cake-1.jpg"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
    <h3 class="nome-casamento">Bolos diversos</h3>
    <a class="btn-bolos" >Tema 3</a>
    </div>
    </div>
    <div id="coluna">
    <div class="bolo-box">
    <img src="https://www.mestredatorta.com.br/tim.php?src=images/bolo/25.jpeg&w=500&h=470"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
    <h3 class="nome-casamento">Bolos diversos</h3>
    <a class="btn-bolos" >Tema 4</a>
    </div>
    </div>
    </section>

    <section id="organizar-quadrado">
    <div id="coluna">
    <div class="bolo-box">
        <img src="https://www.sabornamesa.com.br/media/k2/items/cache/8212207f146778f83156ffc204ca380c_XL.jpg"
        width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho" >
        <h3 class="nome-casamento">Bolos diversos</h3>
        <a class="btn-bolos">Tema 5</a>
    </div>
    </div>
    <div id="coluna">
        <div class="bolo-box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5SWYrYrMiV2aJXoUVoL5Z45bAclxYkcGC4FNGlI7G-SbXdblsQVhG_PIxOLIw4izsyUQ&usqp=CAU"
            width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
            <h3 class="nome-casamento">Bolos diversos</h3>
            <a  class="btn-bolos" >Tema 6</a>
        </div>
        </div>
    <div id="coluna">
    <div class="bolo-box">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/0b/08/a0/a5/bolo-confeitado.jpg"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
    <h3 class="nome-casamento">Bolos diversos</h3>
    <a class="btn-bolos" >Tema 7</a>
    </div>
    </div>
    <div id="coluna">
    <div class="bolo-box">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT03SVkoWtvVRTXPPl0G83XBzULPi9KMjfQ1A&usqp=CAU"
    width="235px"   height="240px" sizes="(max-width: 235px) 100vw, 235px"  id="tamanho">
    <h3 class="nome-casamento">Bolos diversos</h3>
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