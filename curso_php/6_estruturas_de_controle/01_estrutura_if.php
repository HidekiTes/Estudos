<?php 

// condicao verdadeira 
if (5 > 2) {
  echo "Deu certo! Entrou no if <br>";
}

// condicao falsa
if (2 >= 5) {
  echo "Não vai entrar no if, porque deu false! <br>";
}

// Utilizar OP Lógico
if (10 === 10 && 9 > 3) {
  echo "Deu certo! Entrou no If 2 <br>";
}

// Utilização de Variáveis
$a = 10;
$b = 5;
$c = "Deu certo! Entrou no If 3";

if ($a >= $b) {
  echo $c;
}