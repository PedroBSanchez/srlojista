/*
function fazGet() {
    /* Parte que faz a requisição na API (dados recebidos estão sendo simulados até que a API esteja pronta)
    var request = new XMLHttpRequest();
    request.open("GET", url, false);
    request.send();
    return request.responseText;
    
    dados = [
        {"id": 1, "nome" : "Teclado", "valorCusto" : 30, "valorVenda" : 60},
        {"id": 2, "nome" : "Fone", "valorCusto" : 30, "valorVenda" : 60},
        {"id": 3, "nome" : "Mouse", "valorCusto" : 30, "valorVenda" : 60}            
    ];
    return dados;
}

function criaLinha(produto) {
    
    linha = document.createElement("tr");
    tdId = document.createElement("td");
    tdNome = document.createElement("td");
    tdVlCusto = document.createElement("td");
    tdVlVenda = document.createElement("td");
    tdId.innerHTML = produto.id;
    tdNome.innerHTML = produto.nome;
    tdVlCusto.innerHTML = produto.valorCusto;
    tdVlVenda.innerHTML = produto.valorVenda;

    linha.appendChild(tdId);
    linha.appendChild(tdNome);
    linha.appendChild(tdVlCusto);
    linha.appendChild(tdVlVenda);

    return linha;

}

function main() {
    valores = fazGet();
    /*
    produtos = JSON.parse(valores);  
    -> Quando for utilzada a API é necessário este comando, 
    pois os dados recebidos estão em forda de string e não como JSON
    var tabela = document.getElementById("tabelaProdutos");
    //Para cada produto
        //criar uma linha
        //adicionar na tabela
    
    valores.forEach(element => {
        var linha = criaLinha(element);
        tabela.appendChild(linha);
    });


}

main();
*/
