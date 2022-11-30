<?php

class Car {
  public $rodas;
  public $aro =20;
  public $cor = "Vermelha";

  function ligar(){
    echo "RAN RAN RAN <br>";
  }
}

$ferrari = new Car;
$ferrari = new Car;
echo $ferrari -> aro . "<br>";
echo $ferrari -> rodas . "<br>";

$ferrari -> cor = "Azul";
echo $ferrari -> cor;
$ferrari -> ligar();
