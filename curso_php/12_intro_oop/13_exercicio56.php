// Exercício 56
// Crie uma classe Humano com algumas propriedades e o método falar
// Crie uma outra classe Professor que herda de humano, crie também as propriedades e métodos particulares desta classe
// Exiba os valores das propriedades da classe pai e também utilize os métodos

<?php

class Humano {
  public $maos = 2;
  public $pernas = 2;
  public function falar() {
    echo "Olá, eu sou um humano <br>";
  }
}

class Professor {
  public $disciplina = "Matematica";
  public function Lecionando() {
    echo "O professor está dando aula de $this->disciplina <br>";
  }
}

$marcos = new Humano;
echo "$marcos -> maos <br>";
$marcos -> falar();

$joao = new Professor;
echo "$joao -> pernas <br>";
echo "$joao -> disciplina <br>";
//$joao -> falar();
$joao -> Lecionando();