<?php

class Humano {
  public function falar(){
    echo "Olá";
  }
}

$Matheus = new Humano;
$teste = 10;

if(is_object($Matheus)) {
  echo "É um objeto <br>";
} else {
  echo "Não é um objeto <br>";
}

if(is_object($Matheus)) {
  echo "É um objeto <br>";
} else {
  echo "Não é um objeto <br>";
}

echo get_class($Matheus) . "<br>";

if(method_exists($Matheus, "falar")) {
  echo "Método existe <br>";
} else {
  echo "Método não existe <br>";
}

if(method_exists($Matheus, "asd")) {
  echo "Método existe <br>";
} else {
  echo "Método não existe <br>";
}