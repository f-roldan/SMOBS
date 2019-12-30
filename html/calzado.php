<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    <!--Fuentes-->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <!-- Inicio Header(Barra de navegación)-->
    <header class="col-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Login y carrito de compras -->
                <div class="login text-center">
                    <li id="botonLogin" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img width="25" height="25" src="../design/icono/usuario.png" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Ingresá</a>
                            <a class="dropdown-item" href="registro.html">Registrate</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="perfil.html">Tu Perfil</a>

                        </div>
                    </li>
                    <a href=""><img class="" width="25" height="25" src="../design/icono/carro-de-la-compra.png" alt=""></a>
                </div>
                <!-- Menú de opciones -->
                <div class="collapse navbar-collapse opciones" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="btn btn-outline-light" href="home.php">Home</a>
                        <a class="btn btn-outline-light" href="calzado.php">Novedades</a>
                        <a class="btn btn-outline-light" href="contacto.php">Contactos</a>
                        <a class="btn btn-outline-light" href="faq.php">F.A.Q - Preguntas Frecuentes</a>
                    </div>
                </div>
                <!-- Nombre de la marca -->
                <div class="contenedorNombre text-center">
                    <a id="nombre" class="navbar-brand" href="home.php">Zapas</a>
                </div>
                <div class="">
                    <!-- Boton de expanción -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </header>
        <!-- Fin Header(Barra de navegación)-->

    <!-- Comienzo Menu de filtrado de busqueda -->
    <div class="row container-fluid d-flex justify-content-center p-0">
        <div class="row  filtrado container-fluid p-0">
            <button class="col-4" href="#"><img width="30" height="30" src="../design/filtrado/filtro.png" alt="">
                Filtrar</button>
            <button class="col-4" href="#"><img width="30" height="30" src="../design/filtrado/ordenar.png" alt="">
                Ordenar</button>
            <button class="col-4" href="#"><img width="30" height="30" src="../design/filtrado/mostrar.png" alt="">
                Mostrando</button>
        </div>
    </div>
    <!-- Final Menu de filtrado de busqueda -->

    <div class="row container-fluid d-flex justify-content-center p-0">
        <div class="container">
            <main>
                <!-- Comienzo Publicaciones -->
                <div class="row">

                    <!-- Publicacion de calzado 1-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                              <a href="producto.php"><img class="imgPublicacion" src="../design/publicaciones/zapa_1.jpeg" alt="imagen"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">puma</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Vikky Stck mujer</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$4.299 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 2-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_2.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">adidas</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Grand Court hombre</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$4.199 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 3-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_3.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">diadora</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Game hombre</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$2.599 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 4-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_4.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">newport</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Masiv hombre</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$2.499 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 5-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_5.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">newport</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Masiv hombre</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$3.399 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 6-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_6.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">newport</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Masiv hombre</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$3.399 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 7-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_7.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">sybilla</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Teresa mujer</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$2.499 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 8-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_8.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">newport</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas de lona hombre</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$2.399 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 9-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_9.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">newport</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Stone hombre</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$2.399 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 10-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_10.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">aldo</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Brubrylla mujer</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$2.999 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 11-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_11.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">Marca</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">sandalias Eteisa</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$3.399 contado</div>
                        </div>
                    </div>

                    <!-- Publicacion de calzado 12-->
                    <div class="col-6 col-sm-4">
                        <div class="row">
                            <div class="publicacion col-12">
                                <img class="imgPublicacion" src="../design/publicaciones/zapa_12.jpeg" alt="imagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="marca col-12">americanino</div>
                        </div>
                        <div class="row">
                            <div class="tipoCalz col-12">Zapatillas Honey mujer</div>
                        </div>
                        <div class="row">
                            <div class=" precio col-12">$4.999 contado</div>
                        </div>
                    </div>

                </div>
                <!-- final de Publicaciones -->

            </main>
            <!-- Fin del main -->
        </div>
    </div>

    <!-- Comienzo Paginación -->
    <div class="row container-fluid d-flex justify-content-center p-0">
        <div class="row pr-3 mt-2">
            <div class="col-12">
                <nav aria-label="Page navigation example ">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Final Paginación -->


    <!-- Comienzo Footer -->
    <footer class="container-fluid d-flex justify-content-center">
        <div class="row container">


            <div class="col-12 col-md-6">
                <div id="suscribete" class="d-flex justify-content-center">Suscríbete</div>
                <div id="suscribete" class="d-flex justify-content-center px-1 mb-3">Informate de lo último de
                    zapas.
                    Nuestras ofertas y novedades directamente en tu e-mail.</div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="row my-2">
                    <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href="https://www.facebook.com/"><img width="40" height="40"
                                src="../design/redesSociales/facebook.png" alt=""></a></div>
                    <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href="https://twitter.com/"><img width="40" height="40"
                                src="../design/redesSociales/gorjeo.png" alt=""></a></div>
                    <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href="https://www.instagram.com/"><img width="40" height="40"
                                src="../design/redesSociales/instagram.png" alt=""></a></div>
                </div>
            </div>



            <div class="col-12 col-md-6 py-4">
                <ul class="list-group">
                    <li class="list-group-item">Servicio al cliente</li>
                    <li class="list-group-item">Más de zapas</li>
                    <li class="list-group-item">Empresas de zapas</li>
                </ul>
            </div>
        </div>

    </footer>
    <!-- final Footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>