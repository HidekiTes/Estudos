<?php

$str = "Esta é a minha string";
$minha = substr($str, 10, 5); //String Pai, Indice Inicial, Comprimento da palavra

echo $str . "<br>";
echo $minha . "<br>";

$novaString = substr($str2, 8); // Omitir Comprimento = Pegar até o fim
echo $novaString . "<br>";
$novaString2 = substr($str2, 8, -3); // Comprimento Negativo = Remover do Ultimo Indice
echo $novaString2 . "<br>";
