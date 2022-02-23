<?php

/*
 Entrar com 3 números e imprimi-los em
ordem decrescente (suponha números
diferentes)
*/

function ordemDecrescente($num1, $num2, $num3) {
    $array = [$num1, $num2, $num3];
    arsort($array);
    foreach($array as $numero) {
        echo("$numero <br>");
    }
}

ordemDecrescente(10, 150, 50);