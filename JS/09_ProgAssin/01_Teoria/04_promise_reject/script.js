function verificarNumero(num) {
  return new Promise.resolve((resolve, reject) => {
    if(num == 2) {
      resolve(`O numero é ${num}`);
      } else {
        reject(new Error("Falhou"));
    }
  });
}

verificarNumero(2);
verificarNumero(3);