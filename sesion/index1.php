<?php

session_start();

$contador=0;
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador']=0;
    $_SESSION['numero']=[];
    $_SESSION['suma']=0;
    //echo "Se crea la variable 'contador' en el arreglo $ _ SESSION ";
} 
$numero=0;
if (isset($_POST['numero'])) {
    $numero += $_POST['numero'];
    $_SESSION['contador']++;
    $_SESSION['numero'][]=$numero;
    $_SESSION['suma']+=$numero;
}
$contador = $_SESSION['contador'];
echo "Numero: $numero <br>";
echo "Contador: $contador <br>";



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Session</title>
</head>
<body>
    <form method="POST">
        
        <?php
        if ($contador<5) {
            echo "<input type='number' name='numero' />";
            echo "<button type=\"submit\" >Sumar</button>";
        } else {
            var_export($_SESSION['numero']);
            echo "La suma es: ".$_SESSION['suma'];
        }
        ?>
    </form>

    <br>

    <?php
    var_export($_SESSION);
    ?>

    <br>
    <a href="sesion_2.php">Sesion Pagina 2</a>
    <a href="sesion_3.php">Reset Session</a>
</body>
</html>