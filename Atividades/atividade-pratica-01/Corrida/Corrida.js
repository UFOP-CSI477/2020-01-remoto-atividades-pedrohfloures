cont = 1;
function cadCompetidor(nome, tempo)
{
    var tabela = document.getElementById("tbCompetidores");
    var qtdLinhas = tabela.rows.length;
    var linha = tabela.insertRow(qtdLinhas);
    var cellLargada = linha.insertCell(0);
    var cellNome = linha.insertCell(1);
    var cellTempo = linha.insertCell(2);

    cellLargada.innerHTML = cont;
    cont = cont + 1;
    cellNome.innerHTML = nome;
    cellTempo.innerHTML = tempo;

}

function ordena(tabela, col)
{
    var qtdLinhas = tabela.rows.length;
    var aux;

    for (var i = 2; i < qtdLinhas; i++)
    {
        for(var j = 1; j < qtdLinhas-1; j++)
        {
            console.log(j);
            if(tabela.rows[j].cells[col].innerText > tabela.rows[j+1].cells[col].innerText)
            {
   
                auxLarg = tabela.rows[j].cells[1].innerText;
                auxComp = tabela.rows[j].cells[2].innerText;
                auxTempo = tabela.rows[j].cells[3].innerText;

                tabela.rows[j].cells[1].innerHTML = tabela.rows[j+1].cells[1].innerText;
                tabela.rows[j].cells[2].innerHTML  = tabela.rows[j+1].cells[2].innerText;
                tabela.rows[j].cells[3].innerHTML  = tabela.rows[j+1].cells[3].innerText;

                tabela.rows[j+1].cells[1].innerHTML  = auxLarg;
                tabela.rows[j+1].cells[2].innerHTML  = auxComp;
                tabela.rows[j+1].cells[3].innerHTML  = auxTempo;
            }
        }    
    }

}

function calcPosicao(tabela)
{
    var qtdLinhas = tabela.rows.length;
    var aux;
    var pos = 1;

    for (var i = 1; i < qtdLinhas; i++)
    {
        tabela.rows[i].cells[0].innerHTML = pos;
        if(pos == 1)
        {
            tabela.rows[i].cells[4].innerHTML = "Vecendor(a) !";
        }else{
            tabela.rows[i].cells[4].innerHTML = "-";
        }

        if(tabela.rows[i].cells[3].innerText < tabela.rows[i+1].cells[3].innerText)
        {
            pos++;
        }
    }
}

function calcResultado()
{
    var tabCompetidores = document.getElementById("tbCompetidores");
    var qtdLinhasComp = tabCompetidores.rows.length;


    var tabResultado = document.getElementById("tbResultado");
    var qtdLinhasRes = tabResultado.rows.length;

    for (var i = 1; i < qtdLinhasComp; i++)
    {
        var linha = tabCompetidores.rows[i];
        var cellLargada = linha.cells[0];
        var cellNome = linha.cells[1];
        var cellTempo = linha.cells[2];

        var linha = tabResultado.insertRow(qtdLinhasRes);
        qtdLinhasRes++;

        var cellPosicaoRes = linha.insertCell(0);
        var cellLargadaRes = linha.insertCell(1);
        var cellNomeRes = linha.insertCell(2);
        var cellTempoRes = linha.insertCell(3);
        var cellResultadoRes = linha.insertCell(4);

        cellPosicaoRes.innerHTML = i;
        cellLargadaRes.innerHTML = cellLargada.innerText;
        cellNomeRes.innerHTML = cellNome.innerText;
        cellTempoRes.innerHTML = cellTempo.innerText;        
 
    }
    ordena(tabResultado, 3);
    calcPosicao(tabResultado);
}

