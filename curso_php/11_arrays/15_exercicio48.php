// Exercício 48
// Crie um array com os seguintes valores: batata, maçã, pera, feijão e arroz
// Remova pera e feijão

<?php

$arr = ['batata','maçã','pera','feijão','arooz'];

array_splice($arr,2,2);
print_r($arr);
echo "<br>";
// print_r($removidos);

