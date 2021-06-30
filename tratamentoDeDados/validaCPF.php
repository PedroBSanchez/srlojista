<?php

function validaCPF($dado) {
    $validaLetras = validaCPFCaracteresLetras($dado);
    $validaEspeciais = validaCPFCaracteresEspeciais($dado);
    $tamanhoValido = validaCPFTamanho($dado);
    if ($validaLetras && $validaEspeciais && $tamanhoValido) {
        echo "Número de CPF válido";
    } else {
        echo "Número de CPF inválido";
    }

}

function validaCPFCaracteresLetras($dado) {
    if (preg_match('/[A-Za-z]/', $dado)) {
        return false;
    }
    return true;
}

function validaCPFCaracteresEspeciais($dado) {
    if (!ctype_alnum($dado)) {
        return false;
    }
    return true;
}

function validaCPFTamanho($dado) {
    if (strlen($dado) != 11) {
        return false;
    }
    return true;
}

// Teste Positivo
validaCPF("14725836978");
echo "<br>";

// Testes Negativos
validaCPF("123456789");
echo "<br>";
validaCPF("123abc456de");
echo "<br>";
validaCPF("123456789&*");