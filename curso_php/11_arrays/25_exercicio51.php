// Exercício 51
// Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação
// Ordene os dados do maior para o maior
// Exiba uma lista, simulando um ranking, em HTML

<?php

$ranking = [
  "Matheus" => 200,
  "João" => 54,
  "Pedro" => 444,
  "Maria" => 239,
  "Joana" => 123,
  "Henrique" => 12
];

asort($ranking);
?>

<h1>Ranking:</h1>
<ol>
  <?php foreach ($ranking as $pessoa => $pontuacao): ?>
    <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
  <?php endforeach; ?>
</ol>
