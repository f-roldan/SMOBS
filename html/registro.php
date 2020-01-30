<?php

require_once '../controladores/controladorValidacion.php';

$errores = [];

if($_POST) {
    $errores = validarRegistro();


    if(count($errores) == 0){
        $usuario = [
            "nombre" => trim($_POST['nombre']),
            "email" =>trim( $_POST['email']),
            "password" => password_hash($_POST['pass'], PASSWORD_DEFAULT)
        ];
        $elJson = json_encode($usuario);
        file_put_contents("usuarios.json", $elJson . PHP_EOL, FILE_APPEND);
        header("Location: login.php");
        exit;
    }
}

if($_FILES){
    if($_FILES["archivo"]["error"] != 0) {
        echo "Hubo un error al cargar la imágen. <br>";
    } else {
        $ext = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
        if($ext != "jpg" && $ext != "png" && $ext != "jpeg"){
            echo "La imágen debe ser .jpg , .jpeg o .png <br>";
        } else {
            move_uploaded_file($_FILES["archivo"]["tmp_name"], "../archivos/imagen." . $ext);
        }
    }
}



?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title>Registro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
        <!--Fuentes-->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/fontello.css">
        <!--Fuentes-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <?php require_once("header.php"); ?>
                <main class="col back-color">
                    <div class="row">
                        <div class="columna col-lg-12 px-5">
                            <div class="row justify-content-center">
                                <div class="pb-10">
                                    <h1 class="text-white">Completá tus datos</h1>
                                </div>
                            </div>
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="<?= persistirDato("nombre", $errores) ?>">
                                        <?php 
                                            if(isset($errores['nombre'])) {
                                                foreach($errores['nombre'] as $error) {
                                                    echo '<small class="text-danger">' . $error . '</small><br>';
                                                }
                                            } else {
                                                echo "";
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?= persistirDato("email", $errores) ?>">
                                        <?php 
                                            if(isset($errores['email'])) {
                                                foreach($errores['email'] as $error) {
                                                    echo '<small class="text-danger">' . $error . '</small><br>';
                                                }
                                            } else {
                                                echo "";
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
                                        <?php 
                                            if(isset($errores['pass'])) {
                                                foreach($errores['pass'] as $error) {
                                                    echo '<small class="text-danger">' . $error . '</small><br>';
                                                }
                                            } else {
                                                echo "";
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <input type="password" class="form-control" placeholder="Repetir contraseña" name="repass" id="repass">
                                        <?php 
                                            if(isset($errores['repass'])) {
                                                foreach($errores['repass'] as $error) {
                                                    echo '<small class="text-danger">' . $error . '</small><br>';
                                                }
                                            } else {
                                                echo "";
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-12 col-md-6 pb-3">
                                        <input type="file" name="archivo" id="archivo">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-12 text-center">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">Acepto términos y condiciones
                                        </label>
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-4">
                                                <button class="btn btn-success btn-block mt-3" type="submit">Registrarme</button>
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
