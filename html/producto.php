<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    <!--Fuentes-->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Zapatillas Vikky Stck mujer</title>
</head>

<body>
    <div class="container-fluid">
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
                    <a href=""><img class="" width="25" height="25" src="../design/icono/carro-de-la-compra.png"
                            alt=""></a>
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
                <!-- Nombre de la marca e ícono -->
                <div class="contenedorNombre text-center">
                    <a id="nombre" class="navbar-brand" href="home.php">Zapas</a>
                </div>
                <div class="">
                    <!-- Boton de expanción -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </header>
        <!-- Fin Header(Barra de navegación)-->
        <div id="paginaProd">
        <span class="guia col-12"><a href="calzado.html">Novedades</a>/ Zapatillas Vikky Stck mujer </span>
      <div class="container">
        <div class="row">
          <div class="producto col-xs-12 col-lg-6">
            <img src="../design/publicaciones/zapa_1.jpeg" id="muestra" alt="puma">
            <div class="mini">
              <div class="card-group" id="grupo">
                <div class="card">
                  <a href="#"><img src="../design/publicaciones/zapa_1.jpeg" class="card-img-top" alt="puma"></a>
                </div>
                <div class="card">
                  <a href="#"><img src="../design/puma/puma_reves.jpg" class="card-img-top" alt="reves"></a>
                </div>
                <div class="card">
                  <a href="#"><img src="../design/puma/puma_frontal.jpg" class="card-img-top" alt="frontal"></a>
                </div>
                <div class="card">
                  <a href="#"><img src="../design/puma/puma_atras.jpg" class="card-img-top" alt="atras"></a>
                </div>
                <div class="card">
                  <a href="#"><img src="../design/puma/puma_abajo.jpg" class="card-img-top" alt="abajo"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-lg-6">
            <div class="card" style="width: 18rem;" id="descrip">
              <div class="card-body">
                <span><img  src="../design/marcas/puma.png" alt="puma"></span>
                <h5 class="card-title">Zapatillas Vikky Stck mujer</h5>
                <span>
                  <span class="pre"> $4.299 </span><br>
                  <a href="#" class="badge badge-info">Calcula el valor de tus cuotas</a></span>
                <p class="card-text"></p>
                  <form class="form-inline">
                      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Talle
                      </label>
                      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Elegí tu talle</option>
                        <option value="6">36</option>
                        <option value="7">37</option>
                        <option value="7.5">37.5</option>
                        <option value="8">38</option>
                        <option value="9">39</option>
                      </select>
                  </form>
                  <span><br> Color </span>
                  <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active" id="negro">
                      <input type="checkbox" checked>
                    </label>
                    <label class="btn btn-secondary active" id="blanco">
                      <input type="checkbox" checked>
                    </label>
                  </div><br>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">-</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                      <span class="input-group-text">+</span>
                    </div>
                  </div>
                <a href="#" class="btn btn-primary" id="carrito">
                  Agregar al Carrito <img src="../design/icono/carro-de-la-compra.png" alt="carrito">
                </a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="jumbotron jumbotron-fluid" id="detalle">
              <div class="container">
                <h1 class="display-4">Especificaciones</h1>
                <p class="lead">
                  <table class="table table-striped">

                    <tbody>
                      <tr>
                        <th scope="row">Modelo: </th>
                        <td>370280/01</td>
                      </tr>
                      <tr>
                        <th scope="row">Género</th>
                        <td>Mujer</td>
                      </tr>
                      <tr>
                        <th scope="row">Tipo</th>
                        <td>Zapatillas Urbanas</td>
                      </tr>
                      <tr>
                        <th scope="row">Material</th>
                        <td>Sintético</td>
                      </tr>
                      <tr>
                        <th scope="row">Material de la suela</th>
                        <td>Goma</td>
                      </tr>
                      <tr>
                        <th scope="row">Material del forro</th>
                        <td>Textil</td>
                      </tr>
                      <tr>
                        <th scope="row">Temporada</th>
                        <td>Toda la temporada</td>
                      </tr>
                      <tr>
                        <th scope="row">Origen</th>
                        <td>Vietnam</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
              </div>
            </div>
          </div>
      </div>
</div>
</div>
        <!-- Comienzo Footer -->
        <footer class="container-fluid d-flex justify-content-center">
                <div class="row container">


                    <div class="col-12 col-md-6">
                        <div id="suscribete" class="d-flex justify-content-center">Suscríbete</div>
                        <div id="suscribete" class="d-flex justify-content-center px-1 mb-3">Informate de lo último de zapas.
                            Nuestras ofertas y novedades directamente en tu e-mail.</div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="row my-2">
                            <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href=""><img width="40"
                                        height="40" src="../design/redesSociales/facebook.png" alt=""></a></div>
                            <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href=""><img width="40"
                                        height="40" src="../design/redesSociales/gorjeo.png" alt=""></a></div>
                            <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href=""><img width="40"
                                        height="40" src="../design/redesSociales/instagram.png" alt=""></a></div>
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
      </div>
  </body>
</html>
