// Exercício 11
// Crie um Arquivo PHP;
// Teste a expressão "5" * 12;
// Utilize a função gettype() com o resultado como parâmetro para checar o tipo resultante da operação

<?php

$operacao = "5" * 12;
echo $operacao . "<br>";

echo gettype($operacao);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12.2);
echo "<br>";
echo gettype("teste");