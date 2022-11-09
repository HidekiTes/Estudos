// Exercício 26
// Crie uma variável que recebe uma velocidade de um carro
// Depois crie uma estrutura if que verifica essa valocidade
// Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta
// Se igual a 40, imprima uma mensagem para o motorista tomar cuidado
// Se for maior de 40, imprima uma mensagem de multa

<?php

$vel = 40;
$velMax = 40;

if ($vel < $velMax) {
echo "Você está numa velocidade segura";
} else if ($vel == $velMax) {
  echo "Você está no limite de velocidade<br>";
} else {
  echo "Você foi multado, velocidade acima do permitido";
}