// Exercício 40
// Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop
// Imprima o número de letras "a" desta string


<?php

$frase = "O rato roeu a roupa do rei de roma"; // 4 letras a
$contadorA = 0;

for ($i = 0; $i < strlen($frase); $i++) {
  if($frase[$i] === "a") {
    $contadorA;
  }
}

echo "O número de a's na frase é de: $contadorA";
