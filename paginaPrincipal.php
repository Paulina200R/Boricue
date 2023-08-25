<?php
$llave = $_GET['key'];
if ($llave != 123) {
    header('Location: error.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORICUE</title>
    <link rel="stylesheet" href="css/paginaPrincipal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="iMenu" src="img/menu.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li id="list" class="nav-item dropdown">
                        <a id="item" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categoría
                        </a>
                        <ul id="drop" class="dropdown-menu">
                            <li><a id="itemO" class="dropdown-item" href="#">Cuero</a></li>
                            <li><a id="itemO" class="dropdown-item" href="#">Madera</a></li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li id="list" class="nav-item dropdown">
                        <a id="item" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtros
                        </a>
                        <ul id="drop" class="dropdown-menu">
                            <li><a id="itemO" class="dropdown-item" href="#">Más Reciente</a></li>
                            <li><a id="itemO" class="dropdown-item" href="#">Más Vendido</a></li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input id="barra" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button id="lupa" class="btn btn-outline-success" type="submit"><img class="lupa" src="img/lupa.png" alt=""></button>
                </form>
            </div>
        </div>
    </nav>
    <section class="contProd">
    <div class="contCard">
        <div class="contImg">
            <img src="img/p1.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p2.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p3.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p4.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p5.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p6.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p7.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p8.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p1.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p2.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p3.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p4.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p5.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p6.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p7.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p8.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p1.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p2.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p3.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p4.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p5.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p6.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p7.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    <div class="contCard">
        <div class="contImg">
            <img src="img/p8.jpg" alt="">
        </div>
        <div class="cardBody">
            <h5 class="desc">Descripción</h5>
            <p class="action">Acción<b class="price">$00000</b></p>
            <a href="" class="shopCar"></a>
        </div>
    </div>
    
    </section>
    <!-- <div id="cardC" class="card" style="width: 300px; height: 0px;">
        <img src=/img/p1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>