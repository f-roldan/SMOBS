<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <!--Fuentes-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="body-perfil">
    <div class="container-fluid">
        <div class="row">
            <?php require_once("header.php"); ?>
            <main class="main col">
                <div class="row">
                    <div class="columna col-lg-7">
                        <div class="widget">
                            <h3 class="titulo">Hola @Usuario</h3>
                            <h2 class="titulo">Últimas compras</h2>
                            <div class="contenedor-a">
                                <div class="producto d-flex flex-wrap">
                                    <div class="foto">
                                        <a href="#">
                                            <img src="../design/perfil/zapa2.png" width="100" alt="Zapatilla2">
                                        </a>
                                    </div>
                                    <div class="texto">
                                        <a href="">Zapatilla 1</a>
                                        <p class="texto-descripcion">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati maxime accusamus doloribus
                                        </p>
                                        <p class="texto-descripcion"><b>$3500</b></p>
                                    </div>
                                </div>
                                <div class="producto d-flex flex-wrap">
                                    <div class="foto">
                                        <a href="#">
                                            <img src="../design/perfil/zapa1.png" width="100" alt="Zapatilla1">
                                        </a>
                                    </div>
                                    <div class="texto">
                                        <a href="">Zapatilla 2</a>
                                        <p class="texto-descripcion">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati maxime accusamus doloribus
                                        </p>
                                        <p class="texto-descripcion"><b>$4500</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columna col-lg-5">
                        <div class="widget estadisticas">
                            <h3 class="titulo">Datos de la cuenta</h3>
                            <div class="contenedor d-flex flex-wrap">
                                <div class="caja">
                                    <h3>20</h3>
                                    <p>Compras</p>
                                </div>
                                <div class="caja">
                                    <h3>5</h3>
                                    <p>Devoluciones</p>
                                </div>
                                <div class="caja">
                                    <h3>$15625</h3>
                                    <p>Billetera</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget productos">
                            <h3 class="titulo">Últimos articulos vistos</h3>
                            <div class="contenedor">
                                <div class="producto d-flex flex-wrap">
                                    <div class="foto">
                                        <a href="#">
                                            <img src="../design/perfil/zapa1.png" width="100" alt="Zapatilla1">
                                        </a>
                                    </div>
                                    <div class="texto">
                                        <a href="">Zapatilla 1</a>
                                        <p class="texto-descripcion">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati maxime accusamus doloribus
                                        </p>
                                    </div>
                                    <div class="botones d-flex justify-content-start flex-wrap w-100">
                                        <button class="comprar"><i class="icono icon-ok"></i>Comprar</button>
                                        <button class="eliminar"><i class="icono icon-cancel"></i>Eliminar</button>
                                        <button class="denunciar"><i class="icono icon-flag"></i>Denunciar</button>
                                    </div>
                                </div>
                                <div class="producto d-flex flex-wrap">
                                    <div class="foto">
                                        <a href="#">
                                            <img src="../design/perfil/zapa2.png" width="100" alt="Zapatilla2">
                                        </a>
                                    </div>
                                    <div class="texto">
                                        <a href="">Zapatilla 2</a>
                                        <p class="texto-descripcion">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati maxime accusamus
                                        </p>
                                    </div>
                                    <div class="botones d-flex justify-content-start flex-wrap w-100">
                                        <button class="comprar"><i class="icono icon-ok"></i>Comprar</button>
                                        <button class="eliminar"><i class="icono icon-cancel"></i>Eliminar</button>
                                        <button class="denunciar"><i class="icono icon-flag"></i>Denunciar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </main>
        </div>
    </div>
    <footer class="container-fluid d-flex justify-content-center p-0">
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
                    <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href=""><img width="40" height="40"
                                src="../design/redesSociales/facebook.png" alt=""></a></div>
                    <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href=""><img width="40" height="40"
                                src="../design/redesSociales/gorjeo.png" alt=""></a></div>
                    <div class="col-4  d-flex justify-content-center pb-2 pt-2"><a href=""><img width="40" height="40"
                                src="../design/redesSociales/instagram.png" alt=""></a></div>
                </div>
            </div>



            <div class="col-12 col-md-6 py-4">
                <ul class="list-group">
                    <li class="list-group-item op">Servicio al cliente</li>
                    <li class="list-group-item op">Más de zapas</li>
                    <li class="list-group-item op">Empresas de zapas</li>
                </ul>
            </div>
        </div>

    </footer>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>