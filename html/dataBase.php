
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/fontello.css">
<!--Fuentes-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<body>
    <div class="container-fluid">
        <div class="row">
            <?php require_once("header.php"); ?>
            <main id="contenedorDB" class="col">
            <div id = "tabla" class="container">
                <!-- fila titulos -->
                <div class="row d-flex justify-content-center">Administración de base de datos</div>
                <div class="row d-flex justify-content-center">
                    <div class="col tituloDB d-flex justify-content-center align-items-center">id</div>
                    <div class="col tituloDB d-flex justify-content-center align-items-center">productName</div>
                    <div class="col tituloDB d-flex justify-content-center align-items-center">productPrice</div>
                    <div class="col tituloDB d-flex justify-content-center align-items-center">addDate</div>
                    <div class="col tituloDB d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-primary">Nuevo</button>
                    </div>
                </div>
                <!-- fila donde van productos -->
                <div class="row overflow-auto">

                </div>
            </div>
             </main>
</body>