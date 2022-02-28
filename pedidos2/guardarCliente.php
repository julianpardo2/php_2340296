<?php
require_once("entidad/Cliente.php");

session_start();

if (!isset($_SESSION['clientes'])) {
    echo "<script>alert('Acceso no permitido');";
    echo "window.location.href='clientes.php';</script>";
} else {
    if (isset($_POST['cliente']) && strlen($_POST['cliente']) > 0 &&
        isset($_POST['apellido']) && strlen($_POST['apellido']) > 0 &&
        isset($_POST['edad']) && strlen($_POST['edad']) > 0) {
        /*if (!in_array($_POST['cliente'],$_SESSION['clientes'])) {
            $_SESSION['clientes'][]=$_POST['cliente'];
            header('Location: clientes.php');
        } else {
            echo "<script>alert('Nombre del Cliente ya existe');window.location.href='clientes.php';</script>";
        }*/
        $existe=0;
        foreach ($_SESSION['clientes'] as $cliente) {
            if ($_POST['cliente'] == $cliente->nombre && $cliente->apellido==$_POST['apellido']) {
                $existe=1;
                break;
            }
        }
        if ($existe==0) {
            $c = new Cliente($_POST['cliente'], $_POST['apellido']);
            $c->edad=$_POST['edad'];
            $_SESSION['clientes'][]=$c;
            header('Location: clientes.php');
        } else {
            echo "<script>alert('Nombre y Apellido del Cliente ya existe');";
            echo "window.location.href='clientes.php';</script>";
        }
    } else {
        echo "<script>alert('Nombre, Apellido y Edad del Cliente son Obligatorios');";
        echo "window.location.href='clientes.php';</script>";
    }
}
?>