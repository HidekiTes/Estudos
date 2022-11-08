// Exercício 16
// Insira o valor 5 em uma variável, e o valor 3 em outra
// Teste os operadores de: igualdade, diferença, idêntico e não identico

<?php

// ==, !=, ===, !==

$a = 5;
$b = 3;

if ($a == $b) {
 echo "A é igual a B <br>";
}

if ($a != $b) {
  echo "A é diferente de B <br>";
 }

if ($a === $b) {
  echo "A é idêntico a B <br>";
}
 
if ($a !== $b) {
  echo "Não é idêntico a B <br>";
}