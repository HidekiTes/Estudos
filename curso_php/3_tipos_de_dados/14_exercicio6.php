// Exercício 6
// Crie um Arquivo PHP;
// Crie um array com características de um carro
// Imprima duas características;

<?php

$carro = [
  'marca' => 'BMW',
  'rodas' => 4,
  'teto_solar' => true,
  'velocidade_max' => 300,
  'blindado' => false
];

print_r($carro);

$marca = $carro['marca'];
$velocidade_max = $carro['velocidade_max'];

echo "O carro é da marca $marca e atinge no máximo $velocidade_max km/h";