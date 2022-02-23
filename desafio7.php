<?php 

/*
 A biblioteca de uma universidade deseja fazer
um algoritmo que leia o nome do livro que
será emprestado, o tipo de usuário (professor
ou aluno) e possa imprimir um recibo
conforme mostrado a seguir. Considerar que
o professor tem 10 dias para devolver o livro
o aluno somente 3 dias.
*/

$nome = "Edson";
$livro = "Tribos";
$cargo = "Professor";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="desafio7.css">
</head>
<body>
    <div id="recibo">
        <h1>RECIBO</h1>
        <h2><?= "Nome: $nome" ?></h2>
        <h2><?= "Cargo: $cargo" ?></h2>
        <h2><?= "Livro: $livro" ?></h2>
        <h2><?= $cargo === "Aluno" ? "3 dias para devolver" : "10 dias para devolver" ?></h2>
    </div>
</body>
</html>