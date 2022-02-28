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
            <input type="text" class="form-control" name="nombre" placeholder="Digite el nombre del producto" /><br>
            <input type="number" class="form-control" name="precio" placeholder="Digite el precio del producto" /><br>
            <input type="text" class="form-control" name="descripcion" placeholder="Digite la descripcion del producto" /><br>
            <input type="url" class="form-control" name="foto" placeholder="Digite la url de la foto del producto"/><br>
            <button class="btn btn-success" type="submit">Crear Producto</button>
            <button onclick="history.back();" type="button" class="btn btn-secondary float-end">Volver</button>
        </form> 
    </div>
</body>
</html>