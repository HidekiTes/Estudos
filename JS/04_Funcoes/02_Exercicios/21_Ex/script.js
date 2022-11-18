/*  

Exercicio 21
-> Escreva uma função que detecta o tipo de dado passado
-> verifique se é um Number, boolean ou string
-> E Retorne uma mensagem para cada tipo
-> Execute uma função para cada caso

*/

function verDado(dado) {
    if(typeof dado === 'string') {
        console.log("Este dado é uma string");
    } else if(typeof dado === 'number') {
        console.log("Este dado é um number"); 
    } else if(typeof dado === 'boolean') {
        console.log("Este dado é um boolean"); 
    }    
}

verDado(true);
verDado(23);
verDado("Teste");