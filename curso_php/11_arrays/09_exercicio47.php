// Exercício 47
// Crie um array com os seguintes valores: Jaguar, 3.0, azul, 18, Teto Solar, Automatico
// Chame esse array de carro
// Crie variáveis com base neste array


<?php

$carro = ["Jaguar", 3.0, "azul", 18, "Teto Solar", "Automatico"];
list($marca,$motor,$cor,$aro,$opcional,$cambio) = $carro;

echo "$marca <br>";
echo "$motor <br>";
echo "$cor <br>";
echo "$aro <br>";
echo "$opcional <br>";
echo "$cambio <br>";