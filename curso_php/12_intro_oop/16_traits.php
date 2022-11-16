<?php

trait Objeto {
  public function teste () {
    echo "testando trait de objeto";
  }
}

trait Testando {
  public $y = 10;
  public function traitTeste() {
    echo "este método é da trait Testando <br>";
  }
}

class Central {
  use Objeto;
  use Testando;
}

$x = new Central;
$x -> teste();
$x -> traitteste();