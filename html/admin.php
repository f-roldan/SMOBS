<?php
require_once('dataBase.php');


$id_zapa = (isset($_POST['id_zapa']))?$_POST['id_zapa']:"";
$modelo = (isset($_POST['modelo']))?$_POST['modelo']:"";
$cantidad_stock = (isset($_POST['cantidad_stock']))?$_POST['cantidad_stock']:"";
$id_color = (isset($_POST['id_color']))?$_POST['id_color']:"";
$id_talle = (isset($_POST['id_talle']))?$_POST['id_talle']:"";
$precio_unit = (isset($_POST['precio_unit']))?$_POST['precio_unit']:"";
$id_marca = (isset($_POST['id_marca']))?$_POST['id_marca']:"";

$accion= (isset($_POST['accion']))?$_POST['accion']:"";

$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="disabled";
$mostrarModal = false;



switch($accion){
    case "btnAgregar":
        $query = $db->prepare("INSERT INTO zapatillas(id_zapa, modelo, cantidad_stock, id_color, id_talle, precio_unit, id_marca)
        VALUES (:id_zapa, :modelo, :cantidad_stock, :id_color, :id_talle, :precio_unit, :id_marca)");
        $query->bindValue(':id_zapa', $id_zapa);
        $query->bindValue(':modelo', $modelo);
        $query->bindValue(':cantidad_stock', $cantidad_stock);
        $query->bindValue(':id_color', $id_color);
        $query->bindValue(':id_talle', $id_talle);
        $query->bindValue(':precio_unit', $precio_unit);
        $query->bindValue(':id_marca', $id_marca);
        $query->execute();
        header('Location= admin.php');

    break;

    case "btnModificar":
        $query = $db->prepare("UPDATE zapatillas SET
        modelo=:modelo,
        cantidad_stock=:cantidad_stock,
        id_color=:id_color,
        id_talle=:id_talle,
        precio_unit=:precio_unit,
        id_marca=:id_marca WHERE
        id_zapa=:id_zapa");
        $query->bindValue(':id_zapa', $id_zapa);
        $query->bindValue(':modelo', $modelo);
        $query->bindValue(':cantidad_stock', $cantidad_stock);
        $query->bindValue(':id_color', $id_color);
        $query->bindValue(':id_talle', $id_talle);
        $query->bindValue(':precio_unit', $precio_unit);
        $query->bindValue(':id_marca', $id_marca);
        $query->execute();

        header('Location= admin.php');exit;
    break;

    case "btnEliminar":
        $query = $db->prepare("UPDATE zapatillas SET cantidad_stock=:cantidad_stock WHERE id_zapa=:id_zapa");
        $query->bindValue(':id_zapa', $id_zapa);
        $query->bindValue(':cantidad_stock', 0);
        $query->execute();
        header('Location= admin.php');exit;

    break;

    case "btnCancelar":
        header('Location= admin.php');exit;
    break;

    case "Seleccionar":
        $accionAgregar="disabled";
        $accionModificar=$accionEliminar=$accionCancelar="";
        $mostrarModal=true;

        $query= $db->prepare("SELECT * FROM zapatillas WHERE id_zapa=:id");
        $query->bindValue(':id', $id_zapa);
        $query->execute();
        $zapa = $query->fetch(PDO::FETCH_LAZY);

        $modelo=$zapa['modelo'];
        $cantidad_stock=$zapa['cantidad_stock'];
        $id_color=$zapa['id_color'];
        $id_talle=$zapa['id_talle'];
        $precio_unit=$zapa['precio_unit'];
        $id_marca=$zapa['id_marca'];


    break;
}

    $query = $db->prepare("SELECT * FROM zapatillas WHERE cantidad_stock > 0");
    $query->execute();
    $listaZapatillas=$query->fetchAll(PDO::FETCH_ASSOC);






?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Zapatilla</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">

                        <label for="">Modelo</label>
                        <input type="text" required class="form-control" name="modelo" value="<?php echo $modelo;?>" placeholder="" id="modelo" require="">
                        <br>

                        <div class="col-md-4">
                        <label for="">ID</label>
                        <input type="text" required class="form-control" name="id_zapa" value="<?php echo $id_zapa;?>" placeholder="" id="id_zapa" require="">
                        <br>
                        </div>

                        <div class="col-md-4">
                        <label for="">Stock</label>
                        <input type="text" class="form-control" name="cantidad_stock" value="<?php echo $cantidad_stock;?>" placeholder="" id="cantidad_stock" require="">
                        <br>
                        </div>

                        <div class="col-md-4">
                        <label for="">Color</label>
                        <input type="text" class="form-control" name="id_color" value="<?php echo $id_color;?>" placeholder="" id="id_color" require="">
                        <br>
                        </div>

                        <div class="col-md-4">
                        <label for="">Talle</label>
                        <input type="text" class="form-control" name="id_talle" value="<?php echo $id_talle;?>" placeholder="" id="id_talle" require="">
                        <br>
                        </div>

                        <div class="col-md-4">
                        <label for="">Precio</label>
                        <input type="text" class="form-control" name="precio_unit" value="<?php echo $precio_unit;?>" placeholder="" id="precio_unit" require="">
                        <br>
                        </div>

                        <div class="col-md-4">
                        <label for="">Marca</label>
                        <input type="text" class="form-control" name="id_marca" value="<?php echo $id_marca;?>" placeholder="" id="id_marca" require="">
                        <br>
                        </div>

                    </div>
                </div>
                    <div class="modal-footer">

                        <button value="btnAgregar" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                        <button value="btnModificar" <?php echo $accionModificar; ?> class="btn btn-warning" type="submit" name="accion">Modificar</button>
                        <button value="btnEliminar" <?php echo $accionEliminar; ?> class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                        <button value="btnCancelar" <?php echo $accionCancelar; ?> class="btn btn-primary" type="submit" name="accion">Cancelar</button>

                    </div>
                </div>
            </div>
            </div>
            <br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Agregar Zapatilla +
            </button>


        </form>

        <br>
        <div class="row">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Color</th>
                        <th>Talle</th>
                        <th>Precio</th>
                        <th>Marca</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            <?php foreach($listaZapatillas as $zapatilla){ ?>
                <tr>
                    <td><?php echo $zapatilla['id_zapa']; ?></td>
                    <td><?php echo $zapatilla['modelo']; ?></td>
                    <td><?php echo $zapatilla['cantidad_stock']; ?></td>
                    <td><?php echo $zapatilla['id_color']; ?></td>
                    <td><?php echo $zapatilla['id_talle']; ?></td>
                    <td><?php echo $zapatilla['precio_unit']; ?></td>
                    <td><?php echo $zapatilla['id_marca']; ?></td>
                    <td>

                    <form action="" method="post">
                    <input type="hidden" name="id_zapa" value="<?php echo $zapatilla['id_zapa']; ?>">


                    <input type="submit" value="Seleccionar" class="btn btn-info" name="accion">
                    <button value="btnEliminar" type="submit" class="btn btn-danger" name="accion">Eliminar</button>
                    </form>

                    </td>
                </tr>

            <?php } ?>

            </table>
        </div>
<?php if($mostrarModal){?>
    <script>
        $('#exampleModal').modal('show');
    </script>
<?php }?>
    </div>
</body>
</html>
