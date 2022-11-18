let btn1 = document.createElement('#btn1');
let btn2 = document.createElement('#btn2');

function msg() {
  console.log("Clicou em mim");
}

btn1.addEventListener("click",msg);

btn2.addEventListener("click", function() {
  btn1.removeEventListener("click", msg);
});
