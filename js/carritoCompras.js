document.addEventListener("DOMContentLoaded", function () {
    const cantidadInput = document.getElementById("cantidad");
    const btnDisminuir = document.querySelector(".disminuir");
    const btnAumentar = document.querySelector(".aumentar");

    btnDisminuir.addEventListener("click", function () {
        let cantidad = parseInt(cantidadInput.value);
        if (cantidad > 1) {
            cantidad--;
            cantidadInput.value = cantidad;
        }
    });

    btnAumentar.addEventListener("click", function () {
        let cantidad = parseInt(cantidadInput.value);
        cantidad++;
        cantidadInput.value = cantidad;
    });
});
