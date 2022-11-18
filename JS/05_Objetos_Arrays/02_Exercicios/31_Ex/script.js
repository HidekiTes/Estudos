/*  

Exercicio 31
-> Crie dois arrays, um com mais de 5 elementos e outro com menos
-> Faça uma função que verifica o número de elementos
-> Se possuir menos que 5, imprima "Poucos elementos" no console 
-> Se tiver mais, imprima Muitos elementos

*/

let nums = [1,2,3,4,5,6];
let nums2 = [1,2,3];

function verificaElementosArray(arr) {
    if (arr.length >= 5) {
        console.log("Muitos Elementos");
    } else {
        console.log("Poucos Elementos");
    }
}

verificaElementosArray(nums);
verificaElementosArray(nums2);