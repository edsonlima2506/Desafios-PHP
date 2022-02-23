<?php

/*
 Criar um algoritmos que entre com uma
palavra e imprima conforme o exemplo
◦ Palavra: sonho
◦ SONHO
◦ SONHO SONHO
◦ SONHO SONHO SONHO
◦ SONHO SONHO SONHO SONHO
*/

$palavra = "SONHO";
$contador = 0;

for ($i = 0; $i < 10; $i += 1) {
    echo(" $palavra");
    $espacos = [
        0 => "<br>",
        2 => "<br>",
        5 => "<br>",
    ];
    if ($i === 0 || $i === 2 || $i === 5) {
        echo($espacos[$i]);
    }
}