function CalcularData() {
    var ele = document.getElementsByName('andares');
      
    for(i = 0; i < ele.length; i++) {
        if(ele[i].checked){
            if(ele[i].value == "UmAndar")
                document.getElementById("result").innerHTML = "Tempo mínimo de produção: 3 dias.";
            else if(ele[i].value == "DoisAndares")
                document.getElementById("result").innerHTML = "Tempo mínimo de produção: 4 dias.";
            else if(ele[i].value == "TresAndares")
                document.getElementById("result").innerHTML = "Tempo mínimo de produção: 6 dias.";
            else
            document.getElementById("result").innerHTML = "Tempo mínimo de produção: 8 dias.";
        }
    }
}

function Alerta(tipo){
    if (tipo == 'contato')
        alert("Mensagem enviada com sucesso! \nAguarde que entraremos em contato o quanto antes.")
    else if (tipo == 'encomenda')
        alert("Encomenda feita com sucesso! \nAguarde que entraremos em contato.")
    else if (tipo == 'recupera')
        alert("Nova senha salva com sucesso!")
    else if (tipo == 'SAIR'){
        var resultado = confirm("Tem certeza que deseja sair? ")
        if (resultado == true) 
            header("Location: sair.php");   
    }
    else if (tipo == 'cadastro')
        alert("Cadastro feito com sucesso! ")
};

let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function(){
    nextimage();
},3000)

function nextimage(){
    count++;
    if(count>4){
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;
}

function CalculaValor(event) {
    let massaInput = document.getElementsByClassName('massaInput')
    let recheioInput = document.getElementsByClassName('recheioInput')
    let totalInput = document.getElementsByClassName('totalInput')
  
    switch(event.target.value) {
      case 'Chocolate': {
        massaInput.value.placeholder = 'massa - R$45'
        break;
      }
      case 'Baunilha': {
        massaInput.value.placeholder = 'massa - R$20'
        break;
      }
      case 'RedVelvet': {
        massaInput.value.placeholder = 'massa - R$55'
        break;
      }
      case 'Cenoura': {
        massaInput.value.placeholder = 'massa - R$32'
        break;
      }
      case 'ChocolateRecheio': {
        recheioInput.value.placeholder = 'recheio - R$12'
        break;
      }
      case 'Morango': {
        recheioInput.value.placeholder = 'recheio - R$9'
        break;
      }
      case 'Coco': {
        recheioInput.value.placeholder = 'recheio - R$8'
        break;
      }
      case 'Ninho': {
        recheioInput.value.placeholder = 'recheio - R$11'
        break;
      }
      case 'Nutella': {
        recheioInput.value.placeholder = 'recheio - R$16'
        break;
      }
      case 'DoceDeLeite': {
        recheioInput.value.placeholder = 'recheio - R$5'
        break;
      }
      case 'menino-menina': {
        recheioInput.value.placeholder = 'recheio - R$7'
        break;
      }
      default: break;
    }
    let total = `${massaInput.value.placeholder} ${recheioInput.value.placeholder}`
    total = total.replace(/[^0-9|-]/g, '').split('-')
    let result = 0
  
    for (let i = 0; i < total.length; i++) {
      if(!total[i]) continue
      let value = +total[i]
  
      if(value) {
        result += value
      }
    }
    totalInput.valor.placeholder = `TOTAL - R$${result}` 
  }
