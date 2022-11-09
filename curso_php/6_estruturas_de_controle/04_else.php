<?php 

if (5 > 2){
  echo "Entrou no if <br>";
} else {
  echo "Entrou no else <br>";
}

if ("teste" === 5){
  echo "Entrou no if <br>";
} else {
  echo "Entrou no else <br>";
}

// Else com variáveis 

$a = 10;
$b = 20;
$msg = "Entrou no else <br>";

if ($a > $b) {
  echo "Entrou no if <br>";
} else {
  echo "Entrou no else <br>";
}

if ($a > $b) {
  echo "Entrou no if <br>";
} else {
  echo $msg;
}