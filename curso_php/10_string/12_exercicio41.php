// Exercício 41
// Transforme a string "este item está em promoção"
// Em "Este item está em promoção""
// Obs: você pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmente, só com funções


<?php

$str = "este item esta em";
$promo = "promoção";

echo ucfirst($str) . strtoupper($promo);