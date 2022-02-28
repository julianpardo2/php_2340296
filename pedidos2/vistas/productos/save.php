<?php
require_once("../../entidad/Producto.php");

session_start();

/*if (isset($_POST['nombre']) && isset($_POST['precio']) &&
    isset($_POST['descripcion']) && isset($_POST['foto'])) {*/
if (isset($_POST['nombre']) && isset($_POST['precio'])) {       
    $n = $_POST['nombre'];
    $p = $_POST['precio'];
    if (isset($_POST['descripcion'])) {
        $d = $_POST['descripcion'];
    }
    if (isset($_POST['foto'])) {
        $f = $_POST['foto'];
    }
    $producto = new Producto($n, $p);
    if ($d) {
        $producto->descripcion = $d;
    }
    if ($f) {
        $producto->foto = $f;
    }

    $productos=$_SESSION['productos'];
    $existe = false;
    foreach ($productos as $p) {
        if ($p->nombre==$producto->nombre) {
            $existe=true;
            break;
        }
    }
    if (!$existe) {
        $_SESSION['productos'][]=$producto;
        header('Location: index.php');
    } else {
        echo "<script>alert('Nombre ya existe');</script>";
        echo "<a href='index.php'>Inicio</a>";
    }
}


?>