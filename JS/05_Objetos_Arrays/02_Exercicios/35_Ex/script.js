/*  

Exercicio 35 
-> Crie um objeto calculadora
-> Que tem os seguintes métodos: somar/subtrair/multiplicar/e dividir
-> Os métodos só devem aceitar dois parametros
-> Utilize cada um dos métodos e imprima os valores no console

*/

const calculadora = {
    som: function (a,b) {
        return a + b;
    },
    sub: function (a,b) {
        return a - b;
    },
    mult: function (a,b) {
        return a * b;
    },
    div: function (a,b) {
        return a / b;
    }
}

console.log(calculadora.som(2,2));
console.log(calculadora.sub(2,2));
console.log(calculadora.mult(2,2));
console.log(calculadora.dividir(2,2));