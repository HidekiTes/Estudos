// Exercício 3
// Crie um Arquivo PHP;
// Imprima três floats;
// Utilize a função is_float em um deles;


<?php

echo 4.15;
echo "<br>";
echo 12.12;
echo "<br>";

$c = -87.21;

echo $c;
echo "<br>";

if(is_float($c)) {
  echo "Sim, podemos ter floats negativos!";
}

if(is_int($c)) {
  echo "É um inteiro";
}