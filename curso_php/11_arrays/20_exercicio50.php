// Exercício 50
// Crie um array associativo com nomes e idades
// Imprima estes dados em uma tabela HTML
// Dica: utilize as tags do elemento table

<?php

$pessoas = [
  'Matheus' => 29,
  'Alexia' => 29,
  'Pedro' => 29,
  'Joao' => 29
];

?>

<table border="1">
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach($pessoas as $nome => $idade): ?>
  <tr>
    <td><?= $nome; ?></td>
    <td><?= $idade; ?></td>
  </tr>
  <?php endforeach; ?>
  </table>