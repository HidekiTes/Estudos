<?php

function teste($a = "teste") {
  echo "O valor de A é: $a <br>";
}

teste();
teste("asd");

function test($b,$a = "x") {
  echo "O valor de a é: $a e de b é: $b <br>";
}

test("1");
test("1","2");