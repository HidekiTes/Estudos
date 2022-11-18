/*  

Exercicio 11
-> Faça uma estrutura if/else para verificar se um usuário pode dirigir
-> Armazene em variáveis algumas informações sobre o usuário: idade, se tem CNH
-> Se a idade for maior que 18 e não possuir CNH, exiba uma mensagem;
-> Se a idade for maior que 18 e possuir CNH, exiba uma mensagem;
-> Se a idade for menor que 18 e não possuir CNH, exiba uma mensagem;

*/

let idade = 23;
let cnh = false;

if (idade >= 18 && cnh == true) {
    console.log("Sim, pode dirigir");
} else if (idade >= 18 && cnh == false) {
    console.log("Não pode dirigir, mas pode fazer a CNH");
} else {
    console.log("Não pode dirigir");
}