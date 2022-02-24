<?php

/*
 Armazenar 15 números inteiros em um vetor
e imprimir uma mensagem contendo o
número e uma das mensagens: par ou ímpar.
*/

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numeros as $numero) {
    echo($numero);
    echo($numero % 2 === 0 ? " - Par" : " - Ímpar");
    echo("<br>");
}