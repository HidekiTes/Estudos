const cep = /\d{5}-\d{3}/;

console.log(cep.test("99999-999"));
console.log(cep.test("asd"));
console.log(cep.test("888-99"));
console.log(cep.test("99993-999"));

const tel = /\(\d{2}\)\d{4,5}-\d{4}/;

console.log(tel.test("(48)9999-9999"));
console.log(tel.test("(48)99999-9999"));