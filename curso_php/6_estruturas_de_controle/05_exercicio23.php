// Exercício 23
// Complemente o exercicio 22
// Insira um else com uma mensagem para as pessoas que são menores de idade

<?php

$idade1 = 16;
$idade2 = 18;
$idade3 = 26;
$maioridade = 18;
$msg = "Você maior de idade <br>";

if($idade1 >= $maioridade) {
  echo "1 - ";
  echo $msg;
} else {
  echo "Não é maior de idade <br>";
}

if($idade2 >= $maioridade) {
  echo "2 - ";
  echo $msg;
} else {
  echo "Não é maior de idade <br>";
}

if($idade3 >= $maioridade) {
  echo "3 - ";
  echo $msg;
} else {
  echo "Não é maior de idade <br>";
}