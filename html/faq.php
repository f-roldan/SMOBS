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
    <title>Preguntas Frecuentes</title>
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
                        <a class="btn btn-outline-light" href="home.html">Home</a>
                        <a class="btn btn-outline-light" href="calzado.html">Novedades</a>
                        <a class="btn btn-outline-light" href="contacto.html">Contactos</a>
                        <a class="btn btn-outline-light" href="faq.html">F.A.Q - Preguntas Frecuentes</a>
                    </div>
                </div>
                <!-- Nombre de la marca e ícono -->
                <div class="contenedorNombre text-center">
                    <a id="nombre" class="navbar-brand" href="home.html">Zapas</a>
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

        <!-- Comienzo section FAQ-->
      <section class="faq">
        <div class="titulo-faq"><h4 class="col-12">PREGUNTAS FRECUENTES</h4></div>
        <div class="accordion col-12" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  ¿CÓMO COMPRAR EN ZAPAS?
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <strong>1. ELEGÍ LOS PRODUCTOS.</strong> Podés buscar productos desde el menú superior de categorías. Una vez que ingresaste a la grilla de productos, podés filtrar la búsqueda por marca, género, disciplina, etc desde el menú lateral izquierdo. Si buscás un producto en particular, podés ingresar el nombre o código en el buscador principal que se encuentra en el sector superior derecho.
                <br>
                <strong>2. SELECCIONÁ LO QUE QUERÉS Y AGREGALO A TU CARRITO.</strong> Hace click sobre el producto que querés comprar. Seleccioná el color, talle y cantidad deseada. Presioná el botón "Comprar". Podés agregar más productos a la compra o clickear en el botón del carrito en el sector superior derecho para finalizar tu compra.
                <br>
                <strong>3. TU CARRITO.</strong> Una vez en el carrito chequeá que los productos que están son los que elegiste y avanzá al checkout presionando el botón "Finalizar Compra".
                <br>
                <strong>4. DATOS DE FACTURACIÓN.</strong> Finalmente deberás completar los datos que te vamos solicitando: datos personales, dirección de entrega, modo de envío, forma de pago.
                <br>
                Y listo! Ahora solo resta esperar a que llegue tu pedido.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  ¿CUÁNTO TARDA EN LLEGAR MI PRODUCTO?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                El tiempo de entrega depende de la disponibilidad del producto, del tiempo de envío y de la aprobación del medio de pago. Los días que se indiquen son estimativos, y corren siempre a partir del momento en que el pedido se despacha. Los envíos se realizan en toda la República Argentina, excepto la provincia de Tierra del Fuego.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  ¿CÓMO SE REALIZAN LAS ENTREGAS?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Las entregas se realizan a través de correo Andreani, e-Trans o Urbano. Los pedidos salen de nuestro depósito con bolsas inviolables, al recibir tu compra verificá que el envoltorio no esté adulterado. En el caso que percibas algún problema no aceptes la recepción del mismo.
              </div>
            </div>
          </div>

        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                ¿PUEDE RECIBIR MI PEDIDO OTRA PERSONA?
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              Puede recibirlo cualquier persona, mayor de 18 años, que se encuentre en el domicilio acordado, presentando documento de identidad.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                ¿CÓMO RETIRAR MI PEDIDO EN UNA SUCURSAL?
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              Para poder retirar un pedido enviado a alguna de nuestras sucursales se debe cumplir con los siguientes requisitos, caso contrario NO se entregará el mismo:<br>

              <strong>Retira el titular de la compra:</strong><br>
              -DNI del TITULAR de la compra.<br>
              -Factura de compra impresa (enviada a su email) o número de pedido.<br>

              <strong>Retira un tercero</strong><br>
              -Autorización escrita de puño y letra del TITULAR de la compra (únicamente 18 años)<br>
              -DNI del tercero autorizado.<br>
              -Factura de compra impresa o número de pedido.<br>
              -Fotocopia del DNI del titular de la compra.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSix">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                DÍAS Y HORARIOS DE ENTREGA
              </button>
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
              Las entregas de pedidos se realizan de lunes a viernes de 9:00 hs. a 18:00 hs. y los sábados de 9 a 12hs. No se entregan pedidos los días domingo ni feriados.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                TIEMPO PARA REALIZAR CAMBIO
              </button>
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
              Tenés hasta 30 (treinta) días consecutivos desde la recepción del producto para realizar el cambio deseado. El producto adquirido debe presentar las mismas condiciones en las que fue recibido o comprado, en perfectas condiciones, etiqueta y envoltorio original. Para hacer efectivo el cambio es obligatorio llevar la factura impresa.
            </div>
          </div>
        </div>

      </section>

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
