<?php

/*
 Criar 2 vetores com 10 números inteiros
cada. Gerar e imprimir um vetor dos números
não comuns aos e vetores.
*/

$vetor1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$vetor2 = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
$comuns = [];

foreach ($vetor1 as $numero) {
    if (in_array($numero, $vetor2)) {
        array_push($comuns, $numero); 
    }
}

foreach ($comuns as $numeroComum) {
    echo($numeroComum);
    echo("<br>");
}