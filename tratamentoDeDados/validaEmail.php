<?php

function validaEmail($dado){
    if (substr_count($dado, '@') == 1 && substr_count($dado, '.') == 1) {
        echo "Email válido [$dado]";
    } else {
        echo "Email inválido [$dado]";
    }
}

// Teste Positivo


validaEmail("emailteste@mail.com");
echo "<br>";

// Testes negativos
validaEmail("emailtestemail.com");
echo "<br>";
validaEmail("emailteste@mailcom");
