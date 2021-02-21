function limparSelect(campo)
{
    while(campo.lenght > 1 )
    {
        campo.remove(1);
    }
}

function preencherSelectRegioes(data)
{
    let regioes = document.getElementById("regioes");
    limparSelect(regioes);
    for(let index in data)
    {
        const {id, nome, sigla} = data[index];

        let option = document.createElement("option");

        option.value = id;
        option.innerHTML = `${sigla} - ${nome}`;

        regioes.appendChild(option);

    }
}
function carregarRegioes()
{
    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/regioes")
        .then(response => response.json())
        .then(data => preencherSelectRegioes(data))
        .catch(error => console.error(error))
}

function preencherSelectEstados(data)
{
    let estados = document.getElementById("estados");
    limparSelect(estados);
    for(let index in data)
    {
        const {id, nome, sigla} = data[index];

        let option = document.createElement("option");

        option.value = id;
        option.innerHTML = `${nome}-${sigla}`;

        estados.appendChild(option);

    }
}

function carregarEstados()
{
    const regioes = document.getElementById("regioes");
    const regioes_index = regioes.selectedIndex;
    const regiao_id = regioes.options[regioes_index].value;

    const estados = document.getElementById("estados");
    limparSelect(estados);

    if(regiao_id == ""){
        return;
    }

    const url_estados = `https://servicodados.ibge.gov.br/api/v1/localidades/regioes/${regiao_id}/estados`;

    fetch(url_estados)
        .then(response => response.json())
        .then(data => preencherSelectEstados(data))
        .catch(error => console.error(error))

}
