<?php

$a = 10;
$b = 15;

function testEscopo () {
  $a = 5;
  global $b;
  $a++;
  echo "Escopo local de A: $a <br>";
  echo "Escopo global na função de B <br>";
}

echo "Escopo global de A: $a <br>";
echo "Escopo global de B: $b <br>";
testEscopo();

echo "Escopo global de B: $b <br>";
testEscopo();