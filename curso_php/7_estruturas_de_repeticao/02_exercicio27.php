// Exercício 26
// Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes
// Faça um loop while para exibir apenas os dados que são strings

<?php

$arr = [5, "A", true, false, "Opa", 12.6, "Teste", true, [], "Palavra", 5, 10, "Alô"];
$x = count($arr);
$y = 0;

while ($y < $x) {
  if(is_string($arr[$y])) {
    echo $arr[$y] . "<br>";
  }
  $y++;
}