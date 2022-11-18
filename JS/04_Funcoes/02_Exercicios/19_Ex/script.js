/*  

Exercicio 19
-> Escreva uma função que retorne um número aleatório
-> O número máximo retornado deve ser passado via parâmetro
-> Dica: Utilize Math.random();

*/

function numeroAleatorio(num) {
    return Math.floor(Math.random() * num); + 1;    
}

console.log(numeroAleatorio(10));
console.log(numeroAleatorio(100));
console.log(numeroAleatorio(50));