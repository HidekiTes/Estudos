// Exercício 35
// Crie uma função que recebe um número
// Retorne o valor deste número ao quadrado


<?php

function numQuad($x) {
  $res = $x ** 2;
  return $res;
}

echo numQuad(2) . "<br>";
$num = numQuad(4);
echo $num . "<br>";
$x = numQuad(123);
echo $x . "<br>";