<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title>Contacto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
        <!--Fuentes-->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/fontello.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php require_once("header.php"); ?>
            <main class="col contacto-back">
                <div class="row">
                        <div class="col-12 px-5">
                            <div class="row justify-content-center">
                                <div class="pb-3">
                                    <h1 class="text-white">Contactanos</h1>
                                </div>
                            </div>
                            <form action="">
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Deje aquí su mensaje..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-4 pb-3">
                                                <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>   
                </div>
            </main>
        </div>
    </div>
    <!-- Fin del main -->
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
