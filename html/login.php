<?php
session_start();
require_once '../controladores/controladorValidacion.php';
$erroresEnLogin = [];
if($_POST) {
  $erroresEnLogin = validarRegistro();

  if(count($erroresEnLogin)==0){
    //logueo usuario
    $usuariosRegistrados = file_get_contents("usuarios.json");
    $usuariosRegistrados = explode(PHP_EOL, $usuariosRegistrados);
    array_pop($usuariosRegistrados);
    foreach ($usuariosRegistrados as $usuario) {
      $arrayUsuario = json_decode($usuario, true);
      if($_POST["email"] == $arrayUsuario["email"]) {
        if(password_verify($_POST["pass"], $arrayUsuario["password"])) {
          $_SESSION["email"] = $arrayUsuario["email"];
          if(isset($_POST["remember"]) && $_POST["remember"]=="on") {
            setcookie("usuarioEmail",$arrayUsuario["email"],time() + 60*60*24*7);
            setcookie("usuarioPassword",$arrayUsuario["pass"],time() + 60*60*24*7);
          }
          header("Location: home.php");
        }
      }
    }
  }
}
 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    <!--Fuentes-->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Login!</title>
  </head>
  <body>



    <main>
    <section class="text-center  ">
      <div class="container">
        <h3 class="pb-5 display-4">INICIAR SESIÓN CON TU CUENTA</h3>
            <div class="row">
              <div class="col-12">
              <form method="POST" action="">
                <div class="form-group row">
                  <label for="inputemail" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control  " placeholder="Correo Electronico" name="email"  id="email"  value="<?= persistirDato("email",$erroresEnLogin) ?>">
                    <?php
                      if(isset($erroresEnLogin["email"])) {
                        foreach($erroresEnLogin["email"] as $error) {
                          echo '<small class="text-danger">' . $error . '</small><br>';
                        }
                      }else{
                        echo "";
                      }
                    ?>
                  </div>
                  </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" value="">
                    <?php
                      if(isset($erroresEnLogin["pass"])) {
                        foreach($erroresEnLogin["pass"] as $error) {
                          echo '<small class="text-danger">' . $error . '</small><br>';
                        }
                      }else{
                        echo "";
                      }
                    ?>
                  </div>
                  <div class="form-group text-center col-sm-6">
                      <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                      <label for="remember"> Recordarme </label>
                  </div>
                </div>
                <div class="col-12  text-center pt-5 ">
                  <button type="submit" class="btn btn-primary text-white ">Iniciar sesion</button>
                </div>
              </form>
            </div>
            </div>

            <div class="row">

            </div>
            <p class="d-flex justify-content-center pt-3"> <a href="#">¿Olvidó su contraseña?</a></p>
            <p class="d-flex justify-content-center "> <a href="#">¿No tiene una cuenta? Cree una aquí </a></p>

      </div>

    </section>





    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
