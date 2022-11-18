let novoElemento = document.createElement("p");
let texto = document.createTextNode("Algum Texto");

novoElemento.appendChild(textoAlvo); 

let p = document.querySelector("#paragrafo-principal");
let pai = p.parentChild;

pai.appendChild(novoElemento);