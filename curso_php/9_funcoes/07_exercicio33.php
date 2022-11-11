// Exercício 33
// Crie uma função
// Ela deve receber um parâmetro de nome e idade
// Imprima "Olá eu sou o NOME e tenho X anos" 

<?php

function apresentarpessoa($nome, $idade, $genero) {
  echo "Olá eu sou $genero $nome e tenho $idade anos <br>";
}

apresentarpessoa("Matheus",29,"o");
apresentarpessoa("Kleber",22,"o");
apresentarpessoa("Ana",55,"a");
