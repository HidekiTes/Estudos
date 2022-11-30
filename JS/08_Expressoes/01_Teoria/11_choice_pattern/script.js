const reg = /\w+: (Matheus|João|Maria)/; //Nome: asdhklasdh

console.log(reg.test('nome: Matheus'));
console.log(reg.test('nome: José'));
console.log(reg.test('nome: Maria'));