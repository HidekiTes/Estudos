let pessoa = {
    "nome": "AAA",
    "idade": 20,
    "profissão": "Programador",
    "hobbies":["Videogame","Leitura" ,"Correr"]
}

let pessoaTexto = JSON.stringify(pessoa);
console.log(pessoaTexto);
// console.log(pessoaTexto.nome);

let pessoaJSON = JSON.parse(pessoaTexto);
console.log(pessoaJSON);
console.log(pessoaJSON.hobbies[0]);