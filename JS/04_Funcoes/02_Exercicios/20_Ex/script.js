/*  

Exercicio 20
-> Escreva uma função que recebe a idade de uma pessoa
-> Se ela tem mais de 18 anos ela pode entrar na Auto Escola, imprima uma
mensagem informando isso 
-> Se ela tem menos, ela não pode, imprima outra mensagem com este aviso
-> Execute a função nos dois casos 

*/

function podeEntrar(idade) {
    if(idade >= 18) {
        console.log("Pode se matricular na Auto-Escola");
    } else {
        console.log("Não pode se matricular na Auto-Escola");
    }
}

podeEntrar(16);
podeEntrar(25);
podeEntrar(17);
podeEntrar(18);