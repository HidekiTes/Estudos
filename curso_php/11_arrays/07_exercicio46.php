// Exercício 46
// Crie um array multidimensional com 3 arrays que tem 4 elementos cada
// Imprima todos os elementos de cada um dos arrays
// Imprima também quando está mudando de array


<?php

$arr = [
    [1,2,3,4],
    [2,4,6,8],
    [3,6,9,12]
];

//loop no array interno
for($i = 0; $i < count($arr); $i++) {
    //Imprimindo array
    echo "Imprimindo array externo: " . ($i + 1);
    //Imprimindo array interno
    for($j = 0; $j < count($arr); $j++) {
        echo $arr[$i][$j] . "<br>";
    }
}