// Exercício 22
// Crie variáveis que recebem idades;
// Cheque se as idades são maiores ou iguais a 18
// Se sim, imprima uma mensagem que a pessoa é maior de idade

<?php

$idade1 = 16;
$idade2 = 18;
$idade3 = 26;
$maioridade = 18;
$msg = "Você maior de idade <br>";

if($idade1 >= $maioridade) {
  echo "1 - ";
  echo $msg;
}

if($idade2 >= $maioridade) {
  echo "2 - ";
  echo $msg;
}

if($idade3 >= $maioridade) {
  echo "3 - ";
  echo $msg;
}