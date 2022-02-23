<?php

/*
 Ler um número inteiro entre 1 e 12 e escrever
o mês correspondente. Caso o número seja
fora desse intervalo, informar que não existe
mês com este número
*/

$numero = 3;

$meses = [
    1 => "janeiro",
    2 => "fevereiro",
    3 => "março",
    4 => "abril",
    5 => "maio",
    6 => "junho",
    7 => "julho",
    8 => "agosto",
    9 => "setembro",
    10 => "outubro",
    11 => "novembro",
    12 => "dezembro",
];

if ($numero > 0 && $numero < 13) {
    echo($meses[$numero]);
} else {
    echo("Mês inválido");
}