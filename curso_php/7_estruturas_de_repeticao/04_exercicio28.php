// Exercício 28
// Crie um Loop que vai até o número 30
// O contador deve iniciar como 4
// Faça incrementos de 2 em 2 no contador
// Utilize o break para parar o loop quando chegar no número 24

<?php

$x = 4;
$limite = 30;

while ($x < $limite) {
  echo "Executando o loop $x <br>";
  if ($x === 24) {
    echo "Parando o loop";
    break;
  }
  $x += 2;
}