<?php

require_once("../../entidad/Cliente.php");

session_start();

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
        <form id="form" action="save.php" method="post">
            <select class="form-control" name="cliente">
                <?php
                foreach ($_SESSION["clientes"] as $indice => $valor) {
                    echo "<option value='$indice'>$valor->nombre $valor->apellido</option>";
                }
                ?>
            </select>
            <br>
            <input type="date" class="form-control" name="fecha" value="<?php echo date("Y-m-d"); ?>"/><br>
            <select class="form-control" name="formaPago">
                <option value="EF">Efectivo</option>
                <option value="DE">Debito</option>
                <option value="CD">Credito</option>
            </select>
            <br>
            <button class="btn btn-success" type="submit">Crear Pedido</button>
            <button onclick="history.back();" type="button" class="btn btn-secondary float-end">Volver</button>
        </form> 
    </div>
</body>
</html>