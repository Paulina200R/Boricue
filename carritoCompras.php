<?php
$llave = $_GET['key'];
if ($llave != 123){
    header('Location: error.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORICUE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/carritoCompras.css">
    <script src="js/carritoCompras.js"></script>
</head>

<body>
    <header class="cabecera">
        <button class="back"><img class="img-back" src="img/flecha-izquierda.png"></button>
        <h1 class="tittle">Carrito de Compras</h1>
    </header>
    <section class="cont-products">
        <div class="product">
            <img src="img/p1.jpg" class="img-product">
            <div class="desc">
                <p class="name">Producto #1</p>
                <p class="action">Acción
                <p class="price-u" id="valor"><b>$30000</b></p>
                </p>
            </div>
        </div>

        <div class="quantity">
            <button class="disminuir"><b>-</b></button>
            <input type="text" id="cantidad" value="1">
            <button class="aumentar"><b>+</b></button>
        </div>

        <p class="price" id="total"><b>$00000</b></p>

        <div class="product">
            <img src="img/p2.jpg" class="img-product">
            <div class="desc">
                <p class="name">Producto #2</p>
                <p class="action">Acción
                <p class="price-u"><b>$00000</b></p>
                </p>
            </div>
        </div>

        <div class="quantity">
            <button class="disminuir"><b>-</b></button>
            <input type="text" id="cantidad" value="1">
            <button class="aumentar"><b>+</b></button>
        </div>

        <p class="price"><b>$00000</b></p>

        <div class="product">
            <img src="img/p3.jpg" class="img-product">
            <div class="desc">
                <p class="name">Producto #3</p>
                <p class="action">Acción
                <p class="price-u"><b>$00000</b></p>
                </p>
            </div>
        </div>

        <div class="quantity">
            <button class="disminuir"><b>-</b></button>
            <input type="text" id="cantidad" value="1">
            <button class="aumentar"><b>+</b></button>
        </div>

        <p class="price"><b>$00000</b></p>

        <div class="product">
            <img src="img/p4.jpg" class="img-product">
            <div class="desc">
                <p class="name">Producto #4</p>
                <p class="action">Acción
                <p class="price-u"><b>$00000</b></p>
                </p>
            </div>
        </div>

        <div class="quantity">
            <button class="disminuir"><b>-</b></button>
            <input type="text" id="cantidad" value="1">
            <button class="aumentar"><b>+</b></button>
        </div>

        <p class="price"><b>$00000</b></p>

    </section>
    <footer class="footer">
        <div class="bill"><button class="buy"><b>Realizar Compra</b></button></div>
        <div class="prices"><b>$00000</b></div>
    </footer>
</body>

</html>