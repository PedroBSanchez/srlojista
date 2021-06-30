function fazPost(url, body) {
    var request = new XMLDocument();
    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/json");
    request.send(JSON.stringify(body));
    request.onload = function(){
        console.log(this.responseText);

    }

    return request.responseText;
}

function cadastrarProduto(){
    event.preventDefault();
    //var url = "api" url para enviar para api
    var nome = document.getElementById("produtoNome").value;
    var vlCusto = document.getElementById("produtoVlCusto").value;
    var vlVenda = document.getElementById("produtoVlVenda").value;
    var qtdeEstoque = document.getElementById("produtoQtdeEstoque").value;
    
    body = {
        "nome" : nome,
        "vl_custo" : vlCusto,
        "vl_venda" : vlVenda,
        "quantidade_estoque" : qtdeEstoque
    };

    console.log(body);

    //fazPost(url, body) "Será utilizada quando api estiver pronta"



}