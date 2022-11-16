// Exercício 53
// Crie uma classe Cachorro
// Crie o método latir e andar
// Execute p método em novas instâncias da classe


<?php

class Cachorro {
  function latir() {
    echo "Au au <br>";
  }
  function andar($m) {
    echo "O cachorro andou $m metros <br>";
  }
}

$viraLata = new Cachorro();
$pastorAlemao = new Cachorro();

$viraLata->latir();
$pastorAlemao->latir();

$viraLata->andar(1000);
$pastorAlemao->andar(50);