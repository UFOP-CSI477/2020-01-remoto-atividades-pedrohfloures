function verificar()
{

    const nome = document.cadastro.nome.value;
    const idade = document.cadastro.idade.value;
    const CPF = document.cadastro.CPF.value;

    if(nome.length == 0)
    {
        window.alert("Nome não pode estar em branco!");
        document.cadastro.nome = "";
        document.cadastro.nome.focus();
    }else if(isNaN(idade))
    {
        window.alert("Idade inválida!");
        document.cadastro.idade = "";
        document.cadastro.idade.focus();
    }else if(CPF.length != 11 || isNaN(CPF))
    {
        window.alert("CPF inválido - digite apenas os números!");
        document.cadastro.CPF = "";
        document.cadastro.CPF.focus();
    }
    


}