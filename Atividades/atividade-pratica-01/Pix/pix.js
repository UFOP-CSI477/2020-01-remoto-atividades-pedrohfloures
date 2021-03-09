var enviados = 0;
var recebidos = 0;


function limparSelect(campo)
{
    while(campo.lenght > 1 )
    {
        campo.remove(1);
    }
}

function preencherSelectBanco(data)
{
    let bancos = document.getElementById("banco");
    limparSelect(banco);
    for(let index in data)
    {
        const {ispb, nome, cod, fullName} = data[index];

        let option = document.createElement("option");

        option.value = ispb;
        option.innerHTML = `${ispb} - ${fullName}`;

        bancos.appendChild(option);

    }
}

function carregarBancos()
{
    fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherSelectBanco(data))
        .catch(error => console.error(error))
}

function operarPIX(valor, op)
{


    if(op == "R")
    {
        recebidos = recebidos + parseFloat(valor);  
    }else{
        enviados = enviados + parseFloat(valor);
    }
}

function relatorioPIX()
{
    var saldo = recebidos - enviados;
    document.getElementById("relatorio").innerHTML = `Valor total recebido: ${recebidos} <br> Valor total enviado: ${enviados} <br> Saldo total: ${saldo}`;

}