var ID = 0;
var totalComb = 0;
var totalKm = 0;
var totalKmL = 0;
function cadastro(quant, km)
{
    var tabela = document.getElementById("tbCalculo");
    var qtdLinhas = tabela.rows.length;
    var linha = tabela.insertRow(qtdLinhas);
    var cellID = linha.insertCell(0);
    var cellKm = linha.insertCell(1);
    var cellQuant = linha.insertCell(2);
    var cellCons = linha.insertCell(3);
    
    ID = ID + 1;
    cellID.innerHTML = ID;
    
    
    cellKm.innerHTML = km;
    totalKm = totalKm + parseFloat(km);
    
    cellQuant.innerHTML = quant;
    totalComb = totalComb + parseFloat(quant);

    var cons = km / quant;
    totalKmL = totalKmL + parseFloat(cons);
    cellCons.innerHTML = cons;
}

function relatorio()
{
    var mediaComb = totalComb / ID;
    var mediaKm = totalKm / ID;
    var mediaKmL = totalKmL / ID;
    document.getElementById("relatorio").innerHTML = `Quantidade total de combustível utilizada: ${totalComb} <br> 
    Quantidade total de quilômetros rodados: ${totalKm} <br> 
    Média de consumo de cobustível: ${mediaComb} <br> 
    Média de quilômetros rodados: ${mediaKm} <br> 
    Média de desempenho de km/l: ${mediaKmL} <br>`;

}