<?php

function velmax($vel) {
  echo "O carro atinge a velocidade máxima de $vel km/h";
}

velmax(200);
velmax(300);
velmax(400);
echo "Teste continuando <br>";
$velocidade = 125;
velmax($velocidade);

//php ignora parametro desnecessário
velmax(250,"teste");
velmax("teste");


function descanimal($nome, $raca){
  echo "O $nome é da raça $raca, <br>";
}

descanimal("Bob", "Vira Lata");
descanimal("Max", "Vira Lata");
descanimal("Jack", "Vira Lata");