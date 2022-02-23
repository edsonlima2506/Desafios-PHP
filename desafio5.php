<?php

/*
 Ler 3 números, os possíveis lados de um
triângulo, e imprimir a classificação de
acordo com tamanho dos lados
*/

function reconheceTriangulo($lado1, $lado2, $lado3) {
    if ($lado1 !== $lado2 && $lado1 !== $lado3 && $lado2 !== $lado3) {
        echo("É um triangulo escaleno");
    } else if ($lado1 === $lado2 && $lado1 === $lado3) {
        echo("É um triangulo equilátero");
    } else {
        echo("É um triangulo isósceles");
    }
}

reconheceTriangulo(20, 20, 20);