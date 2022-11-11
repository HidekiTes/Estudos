// Exercício 42
// na frase "Cade o seu Queijo? Ele estava aqui em cima"
// Resgate apenas a palavra queijo


<?php

$str = "Cadê o meu queijo? Ele estava aqui em cima";
$queijo = substr($str,12,6);
echo "$queijo <br>";
$estava = substr($str,24,6);
echo "$estava <br>";