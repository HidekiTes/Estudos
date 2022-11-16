// Exercício 49
// Crie variáveis com característica de algum objeto ou animal
// Depois crie um array com compact com estas mesmas variáveis
//Faça um loop no array e imprima os valores

<?php

$raca = "Vira Lata";
$nome = "Turca";
$idade = 3;
$cor = "Preta";
$turca = compact("raca","nome","idade","cor");

print_r($turca);
echo "<br>";

foreach($turca as $carac => $value) {
  echo "$carac: $value <br>";
}