let idade = 19;
if (idade == 19) {
    console.log("A idade é = 19");
}

if (idade > 25) {
    console.log("A idade é maior que 25");
}

let nome = "AAA";
if (nome == "AAA" && idade > 10) {
    console.log("Liberado");
}

let passaporte = true;
if ((nome == "AAA" && idade > 30) || passaporte == true) {
    console.log("Liberado");
}