<?php

/*
Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes
*/

function verificaDivisivel($numero) {
    if (is_int($numero / 10)) {
        echo("É divisível por 10 <br>");
    }
    if (is_int($numero / 5)) {
        echo("É divisível por 5 <br>");
    }
    if (is_int($numero / 2)) {
        echo("É divisível por 2 <br>");
    }
    if (is_int($numero / 2) === false && is_int($numero / 5) === false && is_int($numero / 10) === false) {
        echo("Não é divisível nem por 10 <br> Nem por 5 <br> E nem por 2");
    }
}

verificaDivisivel(20);