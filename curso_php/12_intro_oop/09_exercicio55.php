// Exercício 55
// Crie uma classe Carro
// Crie algumas propriedades e também a propriedade velocidade_maxima
// Crie o método setVelocidademaxima, onde é possivel alterar a velocidade máxima do carro
//E Também o getVelocidadeMaxima onde é possível imprimir a velociade do carro

<?php

class Carro {
  public $cor;
  public $tetoSolar;
  public $velMaxima;

  function setVelMax($vel) {
    $this->velMaxima = $vel;
  }
  
  function getVelMax(){
    echo "A velocidade máxima deste carro é: $this -> velMax km/h <br>";
  }
}

$bmw = new Carro;
$bmw -> cor = "Branca";
$bmw -> tetoSolar = true;
$bmw -> setVelMax(200);
$bmw -> getVelMax();

$ferrari = new Carro;
$ferrari -> setVelMax(200);
$ferrari -> getVelMax();
