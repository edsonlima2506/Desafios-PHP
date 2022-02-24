<?php

/*
 Criar um algoritmo com uma matriz 5x5 e
escreva os elementos da diagonal principal.
*/

$matriz = [
    [5, 1, 1, 1, 1],
    [1, 5, 1, 1, 1],
    [1, 1, 5, 1, 1],
    [1, 1, 1, 5, 1],
    [1, 1, 1, 1, 5],
];

for ($i = 0; $i < 5; $i ++) {
    echo($matriz[$i][$i]);
    echo("<br>");
}