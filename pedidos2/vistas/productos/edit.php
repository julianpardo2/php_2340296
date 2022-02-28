<?php
require_once("../../entidad/Producto.php");
session_start();

if (!isset($_GET['id'])) {
    echo "<script>alert('Opción no valida, debe especificar el producto');</script>";
    echo "<a href='index.php'>Volver al Inicio</a>";
} else {
    $p = $_SESSION['productos'][$_GET['id']];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form id="form" action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
            <input type="text" class="form-control" name="nombre" value="<?php echo $p->nombre; ?>" /><br>
            <input type="number" class="form-control" name="precio" value="<?php echo $p->precio; ?>" /><br>
            <input type="text" class="form-control" name="descripcion" value="<?php echo $p->descripcion; ?>" /><br>
            <input type="url" class="form-control" name="foto" value="<?php echo $p->foto; ?>" /><br>
            <button class="btn btn-success" type="submit">Modificar Producto</button>
            <button onclick="history.back();" type="button" class="btn btn-secondary float-end">Volver</button>
        </form> 
    </div>
</body>
</html>

<?php

}

?>