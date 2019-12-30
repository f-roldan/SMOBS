
<?php
//Acá les dejo comentado lo que tiene que ir en el head de la página
/*
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/fontello.css">
<!--Fuentes-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
*/

//La estructura para que funcione el head (o por lo menos como me funcionó a mi) es:
/*
<body>
    <div class="container-fluid">
        <div class="row">
            <?php require_once("header.php"); ?>
            <main class="col">
            -- Acá iria el resto de su código que va en el main --
            </main>
</body>
*/
?>

<div class="barra-lateral col-12 col-sm-auto">
    <div class="logo">
        <h2>Zapas</h2>
    </div>
    <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
        <a href="home.php"><i class="icon-home"></i><span>Inicio</span></a>
        <a href="perfil.php"><i class="icon-user-o"></i><span>Perfil</span></a>
        <a href="registro.php"><i class="icon-user-plus"></i><span>Registro</span></a>
        <a href="login.php"><i class="icon-login"></i><span>Login</span></a>
        <a href="contacto.php"><i class="icon-mail-alt"></i><span>Contacto</span></a>
        <a href="carritoCompra.html"><i class="icon-basket"></i><span>Carrito</span></a>
        <a href="faq.php"><i class="icon-chat-empty"></i><span>F.A.Q</span></a>
        <a href="#"><i class="icon-logout"></i><span>Salir</span></a>
    </nav>
</div>




    

