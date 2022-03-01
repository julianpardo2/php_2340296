<?php
require_once("../../entidad/Pedido.php");
require_once("../../entidad/Cliente.php");

session_start();

/*if (isset($_POST['nombre']) && isset($_POST['precio']) &&
    isset($_POST['descripcion']) && isset($_POST['foto'])) {*/
if (isset($_POST['cliente']) && isset($_POST['fecha'])) {       
    $cliente = $_SESSION['clientes'][$_POST['cliente']];
    $fecha = $_POST['fecha'];
    if (isset($_POST['formaPago'])) {
        $formaPago = $_POST['formaPago'];
    }
    $pedido = new Pedido($cliente, $fecha);
    if ($formaPago) {
        $pedido->formaPago = $formaPago;
    }

    $_SESSION['pedidos'][]=$pedido;
    $id = array_key_last($_SESSION['pedidos']);
    header('Location: agregarProductos.php?id='.$id);
    
}


?>