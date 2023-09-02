document.addEventListener("DOMContentLoaded", function () {
    var cantInput = document.getElementById("cantidad");
    var suma = document.querySelector(".aumentar");
    var restar = document.querySelector(".disminuir");

    suma.addEventListener("click", function () {
        let cantidad = parseInt(cantInput.value);
        cantidad++;
        cantInput.value = cantidad;
    });

    restar.addEventListener("click", function () {
        let cantidad = parseInt(cantInput.value);

        if (cantidad > 1) {
            cantidad--;
            cantInput.value = cantidad;
        }
    });

});
