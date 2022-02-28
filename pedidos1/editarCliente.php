<?php

session_start();

if (!isset($_GET['pos'])) {
    header('Location: clientes.php');
} else {
    $pos = $_GET['pos'];
    $n=$_SESSION['clientes'][$pos];
    $a=$_SESSION['apellidos'][$pos];
    $e=$_SESSION['edades'][$pos];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a href="clientes.php">Volver</a>
    <br>
    <center><h1>Editar Cliente</h1></center>

    <form method="post" action="salvarCliente.php">
        <input type="hidden" name="pos" value="<?php echo $pos; ?>" />
        <input class="form-control" type="text" name="cliente" placeholder="Nombre del Cliente" value="<?php echo $n; ?>" /><br>
        <input class="form-control" type="text" name="apellido" placeholder="Apellido del Cliente" value="<?php echo $a; ?>" /><br>
        <input class="form-control" type="number" name="edad" placeholder="Edad del Cliente" value="<?php echo $e; ?>" /><br>
        <button class="btn btn-success" type="submit">Editar Cliente</button>
    </form>
    <br><br>
    </div>
</body>
</html>



<?php
}
?>