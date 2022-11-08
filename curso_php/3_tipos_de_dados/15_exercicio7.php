// Exercício 7
// Crie um Arquivo PHP;
// Crie um array com características de uma pessoa;
// Desafio: Faça um if checando se ela é maior de idade e imprima uma mensagem caso seja;

<?php

$pessoa = [
  'nome' => 'AAAAAAA',
  'idade' => 11,
  'profissao' => 'Programador',
  'graduacao' => 'Sistemas da Informação',
];

$maioridade = 18;

// desafio
if($pessoa['idade'] >= $maioridade) {
  echo "A pessoa é maior de idade!";
}
