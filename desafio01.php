<?php

/*
  Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5
*/

function somaNumeros($num1, $num2) {
    $resultado = $num1 + $num2;
    if ($resultado > 20) {
        echo($resultado + 8);
    } else {
        echo($resultado - 5);
    }
}

somaNumeros(5, 5);
