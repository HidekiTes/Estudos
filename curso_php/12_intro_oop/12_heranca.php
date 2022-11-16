<?php

class Humano {
  public $idade = 29;
  
  public function falar() {
    echo "Olá Mundo! <br>";
  }
  private function gritar(){
    echo "PHP É MUITO BOM! <br>";
  }
  public function acessaGritar(){
    $this -> gritar();
  }
  protected function falarBaixinho(){
  echo "bla bla bla <br>";
  }
  public function acessaFalarBaixinho(){
    $this -> falarBaixinho();
  }
}

class Programador extends Humano {
  public function acessaFalarBaixinhoProg(){
    $this -> falarBaixinho();
  }
}

$ze = new Humano;
$ze -> falar();
$ze -> acessaGritar();
$ze -> acessaFalarBaixinho();

$Matheus = new Programador;
echo $Matheus -> idade . "<br>"; 
$Matheus -> falar();
$Matheus -> acessaGritar();
$Matheus -> acessaFalarBaixinhoProg();


