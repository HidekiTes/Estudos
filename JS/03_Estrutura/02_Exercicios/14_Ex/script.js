/*  

Exercicio 14 
-> Escreva um loop for ou while que exiba qual número é par e qual número é impar
-> O Contador deve iniciar em 0 e ir até 50

*/

for(let i = 0; i <= 50; i++) {
    if(i %  2 == 0) {
        console.log(`O numero ${i} é par`);
    } else {
        console.log(`O numero ${i} é impar`);
    }
}