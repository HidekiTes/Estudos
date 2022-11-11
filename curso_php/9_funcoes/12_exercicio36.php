// Exercício 36
// Crie uma função que recebe um array de números
// Crie um array com apenas os números que são maiores que 7
// Retome este novo array e imprima na tela


<?php

$arr = [];
for ($i = 0; $i <= 30; $i++) {
  array_push($arr, $i);
}

//print_r ($arr);
function arrayMaiorSete($array) {
  for($j=0; $j<count($array); $j++) {
    if($array[$j] > 7) { 
      array_push($arrayRetorno, $array[$j]);
    }
  }
  return $arrayRetorno;
}

$novoArray = arrayMaiorSete($arr);
print_r($novoArray);