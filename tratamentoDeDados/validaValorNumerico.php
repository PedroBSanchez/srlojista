<?php

function validaValorNumerico($dado) {
    if (is_numeric($dado)) {
        echo "Valor numérico valido";   
    } else {
        echo "Valor numérico inválido";
    }
}

// Teste positivo

validaValorNumerico(50);
echo "<br>";


// Teste negativo

validaValorNumerico("abc");


