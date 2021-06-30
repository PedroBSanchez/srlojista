<?php

function validaNome($dado) {
    $validaNumeros = validaNomeClienteNumeros($dado);
    $validaEspeciais = validaNomeClienteEspeciais($dado);

    if ($validaNumeros && $validaEspeciais) {
        echo "$dado - Nome válido - [Não possui números nem caracteres especiais]";
    } else {
        echo "$dado - Nome inválido - [Possui números ou caracteres especiais]";
    }
}

function validaNomeClienteNumeros($dado) {
    if (preg_match('/[0-9]/', $dado)) {
        return false;
    }
    return true;
}

function validaNomeClienteEspeciais($dado) {
    if (!ctype_alnum($dado)) {
        return false;
    } 
    return true;
}


// Teste Positivo

validaNome("Gustavo");
echo "<br>";

// Testes Negativos

validaNome("Gustavo123");
echo "<br>";
validaNome("Gustavo$%@#$");





