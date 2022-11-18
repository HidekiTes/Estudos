/*  

Exercicio 30
-> Crie um array com 5 nomes, incluindo o seu
-> Verifique o seu nome existe no array
-> Se existir imprima alguma mensagem no console

*/

let names = ["João", "Maria", "José", "Matheus", "Rodrigo"];

if(names.includes("Pedro")) {
    console.log("O nome foi encontrado");
} else {
    console.log("O nome não foi encontrado");
}