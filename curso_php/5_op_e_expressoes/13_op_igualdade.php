<?php

if(3 == 3) {
  echo "Comparação verdadeira <br>";
}

if(3 == 4) {
  echo "Comparação verdadeira <br>";
}

$a = 12;
$b = 12;
$c = 100;

if($a == $b) {
  echo "Comparação verdadeira <br>";
}

if($a == $c) {
  echo "Comparação verdadeira <br>";
}

$nome = "AAAA";
$nomedosist = "AAAA";

if($nome == $nomedosist) {
  echo "O nome coincide <br>";
}

if($nome = $nomedosist) {
  echo "O nome coincide <br>";
}