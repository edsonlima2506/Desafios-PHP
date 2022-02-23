<?php

/*
 Criar um algoritmos que leia um número e
imprima todos os número de 1 até ele e o seu
produto.
*/

$numero = 10;
$array = [];

for ($i = 1; $i <= $numero; $i ++) {
    echo("$i <br>");
    array_push($array, $i);
}

echo(array_product($array));