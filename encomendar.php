<?php
include("protect.php");
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
    <script type="text/javascript" src="script.js"></script>
    <link rel="shortcut icon" href="imagens\favicon.ico" type="image/x-icon">
    <title>DevCake Encomendas</title>
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
    <div>
        <br><br>
        <section id="encomenda">
        <form onchange="CalculaValor(window.event)" name="form" method="POST" action="salvarencomenda.php">
        <h1>Encomende seu bolo</h1>
            <div id="bloco">
            <h3>Massas:</h3>
            <input type="radio" id="chocolateMassa" name="massas" value="Chocolate">
            <label for="chocolateMassa">Chocolate - R$45</label><br>
            <input type="radio" id="baunilhaMassa" name="massas" value="Baunilha">
            <label for="baunilhaMassa">Baunilha - R$20</label><br>
            <input type="radio" id="redVelvetMassa" name="massas" value="RedVelvet">
            <label for="redVelvetMassa">Red Velvet - R$55</label><br>
            <input type="radio" id="cenouraMassa" name="massas" value="Cenoura">
            <label for="cenouraMassa">Cenoura - R$32</label>
            <br>
            <br>
            </div>
            <div id="bloco">
            <h3>Recheios:</h3>
            <input type="radio" id="chocolate" name="recheios" value="ChocolateRecheio">
            <label for="chocolate">Chocolate - R$12</label><br>
            <input type="radio" id="morango" name="recheios" value="Morango">
            <label for="morango">Morango - R$9</label><br>
            <input type="radio" id="coco" name="recheios" value="Coco">
            <label for="coco">Coco - R$8</label><br>
            <input type="radio" id="ninho" name="recheios" value="Ninho">
            <label for="ninho">Ninho - R$11</label><br>
            <input type="radio" id="nutella" name="recheios" value="Nutella">
            <label for="nutella">Nutella - R$16</label><br>
            <input type="radio" id="doceDeLeite" name="recheios" value="DoceDeLeite">
            <label for="doceDeLeite">Doce de Leite - R$5</label><br>
            <input type="radio" id="menino-menina" name="recheios" value="menino-menina">
            <label for="menino-menina">Menino-Menina - R$7</label><br>
            <br>
            </div>
            <div id="bloco">
            <h3>Andares:</h3>
            <input type="radio" id="umAndar" name="andares" value="UmAndar" onclick="CalcularData()">
            <label for="umAndar">1</label>
            <input type="radio" id="doisAndares" name="andares" value="DoisAndares" onclick="CalcularData()">
            <label for="doisAndares">2</label>
            <input type="radio" id="tresAndares" name="andares" value="TresAndares" onclick="CalcularData()">
            <label for="tresAndares">3</label>
            <input type="radio" id="quatroAndares" name="andares" value="QuatroAndares" onclick="CalcularData()">
            <label for="quatroAndares">4</label>
            <input type="text" class="decoracao" name="decoracao" placeholder="Tipo e tema de sua decoração">
            <div></div>
            <br>
            </div>
            <div id="bloco">
            <h3>Qual a data do seu pedido?</h3>
            <input type="date" name="dataSolicitada"  class="btn-encomendar" id="dataSolicitada">
            <div id="result"></div>
            <br>
            </div>
            <div id="bloco">
            <h3>Forma de entrega</h3>
            <input type="radio" id="sim" name="entrega" value="sim">
            <label for="sim">Receber em casa</label>
            <input type="radio" id="nao" name="entrega" value="nao">
            <label for="nao">Retirada</label>
            <br><br>
            </div>

            <section id="preco">
            <div class='comment-card'>
            <h2>
              Valores:
            </h2>
            <input class="massaInput" name="value" placeholder="massa" disabled></input>
            <label for="value" ></label>
            <input class="recheioInput" name="value" placeholder="recheio" disabled></input>
            <label for="value" ></label>
            <input class="totalInput" name="valor" placeholder="TOTAL" style="margin-top:3rem" disabled></input>
            <label for="value" ></label>
          </div>
          <div class="encomendar">
          </div>
            <div class="encomendar">
            <h4><button type="submit" class="btn-encomendar"  onclick="Alerta('encomenda')" >Encomendar</button></h4>

</div>
</section>
</div>
        </form>
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