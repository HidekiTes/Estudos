let carro = {
    portas: 2,
    portamalas: '200l',
    motor: '2.0',
}

let adicionais = {
    tetosolar: true,
    arcondicionado: true,
}

console.log(carro); // vai retornar somente a informação original
Object.assign(carro,adicionais);
console.log(carro); // vai retornar todas as informações