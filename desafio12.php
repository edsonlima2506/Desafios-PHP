<?php

/*
 Ler vários números e informar quantos
números entre 100 e 200 foram digitados. Se
o valor 0 for lido encerrar a execução.
*/

$numeros = [120, 110, 10, 0, 189, 423, 4, 150];
$contador = 0;

for ($i = 0; $i < count($numeros); $i += 1) {
    if ($numeros[$i] >= 100 && $numeros[$i] <= 200) {
        $contador++;
    } else if ($numeros[$i] === 0) {
        break;
    }
}

echo($contador);