<?php

$arr = [
  'cor'=>'vermelho',
  'forma'=>'retangular',
  'material'=>'aço'
];

extract($arr);
echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Matheus";
$pessoa = [
  'nome' => 'João',
  'idade'=> 29
];

extract($pessoa);
echo "$nome <br>";
echo "$idade <br>";