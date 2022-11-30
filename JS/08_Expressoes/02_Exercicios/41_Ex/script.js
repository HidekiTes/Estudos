/*  

Exercicio 41
-> Crie uma regex que aceite só letras maiúsculas
-> Depois teste

*/

const validarMaiuscula = /[A-Z]/;

console.log(validarMaiuscula.test("testando"));
console.log(validarMaiuscula.test("1234"));
console.log(validarMaiuscula.test("TESTANDO"));