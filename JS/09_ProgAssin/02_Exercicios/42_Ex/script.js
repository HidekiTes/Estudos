/*  

Exercicio 42
-> Crie uma regex que só aceite strings terminadas com ID
-> Depois teste

*/

const validarId = /\d+ID\b/;

console.log(validarId.test("357576257ID"));
console.log(validarId.test("3575234"));
console.log(validarId.test("asd"));
console.log(validarId.test("hksdfhID"));
console.log(validarId.test("35757ID"));
