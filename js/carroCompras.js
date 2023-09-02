window.onload = inicio;

function inicio() {
    document.getElementById("dismi").addEventListener("click", restar);
    document.getElementById("aumen").addEventListener("click", sumar);
}

function sumar() {
    var valor = document.getElementById("valor1");
    var inputCant = document.getElementById("cantidad");
    let precio = parseFloat(valor.value);
    let cant = parseInt(inputCant.value);
    cant++;
    resul = parseFloat(precio)*parseFloat(cant);
    inputCant.value = cant;
    document.getElementById("total1").innerHTML = `$${resul}`;
}

function restar() {
    var valor = document.getElementById("valor1");
    var inputCant = document.getElementById("cantidad");
    let precio = parseFloat(valor.value);
    let cant = parseInt(inputCant.value);
    if (cant > 1) {
        cant--;
        let resul = precio*cant;
        inputCant.value = cant;
        document.getElementById("total1").innerHTML = `$${resul}`;
    }
}
