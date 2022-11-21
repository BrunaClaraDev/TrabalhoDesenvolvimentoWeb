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

