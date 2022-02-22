<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="operaciones.php">Operaciones</a><br><br>
    <form method="POST" action="">
        <input type="text" placeholder="Escriba su nombre" name="nombre" />
        <button type="submit" name="btnEnviar">Enviar</button>
    </form>
    <?php
        if (isset($_REQUEST['nombre'])) {
            $nombre = $_REQUEST['nombre'];
        } else {
            $nombre = "Nombre no existente";
        }
        
        echo "<h1>Hola Mundo</h1>";
    ?>
    <br/>
    <br>
    <h3><?php echo $nombre; ?></h3>
</body>
</html>