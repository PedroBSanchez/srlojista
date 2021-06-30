<?php

function evitaSqlInjection($dado) {
    $dado = addslashes($dado);
    echo $dado;
}

//Teste

evitaSqlInjection("''Teste");
