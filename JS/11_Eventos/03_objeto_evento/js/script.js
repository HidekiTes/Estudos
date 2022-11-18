let btn1 = document.createElement('#btn1');
let btn2 = document.createElement('#btn2');

function msg(e) {
  console.log(e);
}

btn1.addEventListener("click",msg);

btn2.addEventListener("click", function(event) {
  console.log(event);
});
