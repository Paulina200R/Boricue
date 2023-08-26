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
                            <li><a id="itemO" class="dropdown-item" href="#">Tela</a></li>
                            <li><a id="itemO" class="dropdown-item" href="#">Madera</a></li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <!-- <select id="ejemplo"> Ejemplo de select para que funcione el js
                        <option value="0" selected="selected">Filtros</option>
                        <option value="1">Item #1</option>
                        <option value="2">Item #2</option>
                        <option value="3">Item #3</option>
                    </select> -->
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