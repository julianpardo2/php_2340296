<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ejercicios</title>
</head>
<body>
    <h1>Ejercicio Divisores</h1>
    <form method="post" action="divisores.php">
        <input type="number" name="numero" />
        <input type="submit" name="btnEnviar" />
    </form>
    <br>
    <h1>Ejercicio Dos Divisores</h1>
    <form method="post" action="dos-divisores.php">
        <input type="number" name="numero1" placeholder="Digite un numero" /><br>
        <input type="number" name="numero2" placeholder="Digite un numero" />
        <input type="submit" name="btnEnviar" />
    </form>

    <br>
    <h1>Ejercicio Maximo Común Divisor</h1>
    <form method="post" action="mcd.php">
        <input type="number" name="numero1" placeholder="Digite un numero" /><br>
        <input type="number" name="numero2" placeholder="Digite un numero" /><br>
        <input type="number" name="numero3" placeholder="Digite un numero" />
        <input type="submit" name="btnEnviar" />
    </form>
    <br>
    <h1>Ejercicio Datos Randomicos Reto 1</h1>
    <form method="post" action="reto1.php">
        <input type="submit" name="btnEnviar" value="Reto 1" />
    </form>
</body>
</html>