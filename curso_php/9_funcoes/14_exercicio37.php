// Exercício 37
// Crie uma função chamada defineCorCarro
// Onde há um parâmetro chamado cor, com valor default de vermelha
// Retorne a cor do carro
// Imprima o retorno tanto com parâmetro default, como também definindo a cor;

<?php

function defineCor($cor = "Vermelha") {
  return "A cor do carro é: $cor";
}

$carroVerm = defineCor();
echo $carroVerm . "<br>";

$carroAzul = defineCor("Azul");
echo $carroAzul . "<br>";