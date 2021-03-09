var num1 = "";
var num2 = "";
var op = "X";
var resultado = 0;
function calculo(num)
{
    if(op == "X")
    {
        num1 = num1 + num;
        document.getElementById("num1").innerHTML = "Número 1:  " + num1;
    }else
    {
        num2 = num2 + num;
        document.getElementById("num2").innerHTML = "Número 2:  " + num2;
    }
}
function opera(operacao)
{
    op = operacao;
    document.getElementById("op").innerHTML = "Operação:  " + op;
}

function calcular()
{

    if(op == '+')
    {
        resultado = parseFloat(num1) + parseFloat(num2);
    }else  if(op == '-')
    {
        resultado = parseFloat(num1) - parseFloat(num2);
    }else  if(op == '*')
    {
        resultado = parseFloat(num1) * parseFloat(num2);
    }else  if(op == '/')
    {
        resultado = parseFloat(num1) / parseFloat(num2);
    }

    document.getElementById("resultado").innerHTML = "Resultado:  " + resultado;
}

function resetar()
{
    num1 = "";
    document.getElementById("num1").innerHTML = "";
    num2 = "";
    document.getElementById("num2").innerHTML = "";
    op = "X";
    document.getElementById("op").innerHTML = "";
    resultado = 0;
    document.getElementById("resultado").innerHTML = "";
}