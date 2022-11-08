// Exercício 19
// Converta os seguintes dados para int com operador de cast;
// "Testando"
// 12.9
// true
// [1,2,3]
// E veja os resultados

<?php

$a = (int) "testando";
echo $a . "<br>";
$b = (int) "asd";
echo $b . "<br>";

$c = (int) "12.9";
echo $c . "<br>";
$d = (int) "5";
echo $d . "<br>";

$e = (int) "true";
echo $e . "<br>";
$f = (int) "false";
echo $f . "<br>";

$g = (int) [1, 2, 3];
echo $g . "<br>";