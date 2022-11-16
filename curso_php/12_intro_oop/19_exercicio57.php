// Exercício 57
// Crie uma classe Cachorro com propriedades
// Inicie as propriedades via constructor
// Crie um método para exibir cada um das propriedades que você criou

<?php

class Cachorros {
  public $nome;
  public $cor;
  public $patas;

  function __construct($nome,$cor,$patas){
    $this -> nome = $nome;
    $this -> cor = $cor;
    $this -> patas = $patas;
  }

  public function exibirAnimal(){
    echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas";
  }
}

$turca = new Cachorros("Turca","Preta",4);
$turca -> exibirAnimal();

$nome = "Tubarão";
$cor = "Branca";
$patas = 4;

$tubarao = new Cachorros($nome,$cor,$patas);