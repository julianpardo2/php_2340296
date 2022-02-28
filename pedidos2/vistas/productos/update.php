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
    $producto = $_SESSION['productos'][$_POST['id']];
    $producto->nombre=$n;
    $producto->precio = $p;
    if ($d) {
        $producto->descripcion = $d;
    }
    if ($f) {
        $producto->foto = $f;
    }
    $_SESSION['productos'][$_POST['id']]=$producto;
    header('Location: index.php');

}


?>