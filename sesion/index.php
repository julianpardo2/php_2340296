<?php

//session_start();

$contador=0;
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador']=0;
    $_SESSION['numero']=0;
    //echo "Se crea la variable 'contador' en el arreglo $ _ SESSION ";
} 
$numero=$_SESSION['numero'];
if (isset($_POST['numero'])) {
    $numero += $_POST['numero'];
    $_SESSION['contador']++;
    $_SESSION['numero']=$numero;
}
$contador = $_SESSION['contador'];
echo "Numero: $numero <br>";
echo "Contador: $contador <br>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Session</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="numero" /> <button type="submit">Sumar</button>
    </form>

    
</body>
</html>