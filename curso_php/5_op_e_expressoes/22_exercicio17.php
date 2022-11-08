// Exercício 17
// Verifique as seguintes operações com AND;
// 15 > 5 AND "Joao" === "João"
// "teste" > 5 AND 1
// 2 = 3 AND 5 >= 3

<?php

// Primeira Comparação
if (15 > 5 && "Joao" === "João") {
  echo "A comparação 1 é verdadeira <br>";
}

// Segunda Comparação
if ("teste" > 5 && 1) {
  echo "A comparação 2 é verdadeira <br>";
}

// Comparação Teste
if (10 > 5 && 1) {
  echo "A comparação teste é verdadeira <br>";
}

// Terceira Comparação
if (2 == 3 && 5 >= 3) {
  echo "A comparação 3 é verdadeira <br>";
}