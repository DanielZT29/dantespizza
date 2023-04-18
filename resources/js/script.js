function mostrar(){
    document.getElementById('data').style.display = 'block';
}

function ocultar(){
    document.getElementById('data').style.display = 'none';
}




var sumar = document.getElementById("mas");
var restar = document.getElementById("menos");
var contador = document.getElementById("contador");
var importe = document.getElementById("importe");
var valorBase = 110.00;
var prevValue;

function calcular() {
  var value = contador.value;
  var isValid = /^[1-9][0-9]*$/.test(value);

  if (!isValid) {
    contador.value = prevValue;
  } else {
    prevValue = value;
  }

  importe.value = Number.parseFloat(contador.value * valorBase).toFixed(2);
}

sumar.onclick = function() {
  contador.value = Number(contador.value) + 1;
  calcular();
};

restar.onclick = function() {
  contador.value = Number(contador.value) - 1;
  calcular();
};

contador.onchange = function() {
  calcular();
};

contador.onkeyup = function() {
  if (contador.value === "") {
    return;
  }
  calcular();
};

calcular();
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}
