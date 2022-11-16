<?php

class Carr {
  public $portas2;
  public $cor2;
  public $marca2;
  
  function __construct($portas2,$cor2,$marca2) {
    $this -> portas = $portas2;
    $this -> cor = $cor2;
    $this -> marca = $marca2;
  }
}

$ferrari = new Carr(4,"Vermelha","Ferrari");
echo "O carro é da marca $ferrari->marca e tem a cor $ferarri->cor <br>";