<?php

interface Caracteristicas {
  const nome = "Matheus";
  public function falar ();
}

class Humano implements Caracteristicas {
  public $idade = 29;
  public function falar() {
    echo "Olá mundo! <br>";
  }
  public function dizerNome() {
    echo "Meu nome é self::nome";
  }
}

$matheus = new Humano;
$matheus -> falar();
$matheus -> dizerNome();