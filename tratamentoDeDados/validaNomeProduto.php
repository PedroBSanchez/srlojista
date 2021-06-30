<?php

function validNomeProduto($dado) {
    $validaEspeciais = validaNomeProdutoEspeciais($dado);
    if ($validaEspeciais) {
        echo "$dado - Nome de produto válido";
    } else {
        echo "$dado - Nome de produto inválido";
    }
}



function validaNomeProdutoEspeciais($dado) {
    if (!ctype_alnum($dado)) {
        return false;
    } 
    return true;
}


// Teste Positivo
validNomeProduto("Produto");
echo "<br>";
// Teste Negativo
validNomeProduto("Produto!@*(&");

