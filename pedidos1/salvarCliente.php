<?php

session_start();
if (!isset($_SESSION['clientes']) || !isset($_SESSION['apellidos']) || !isset($_SESSION['edades'])) {
    echo "<script>alert('Acceso no permitido');";
    echo "window.location.href='clientes.php';</script>";
} else {
    if (isset($_POST['cliente']) && strlen($_POST['cliente']) > 0 &&
        isset($_POST['apellido']) && strlen($_POST['apellido']) > 0 &&
        isset($_POST['edad']) && strlen($_POST['edad']) > 0) {
            $pos = $_POST['pos'];
            $_SESSION['clientes'][$pos]=$_POST['cliente'];
            $_SESSION['apellidos'][$pos]=$_POST['apellido'];
            $_SESSION['edades'][$pos]=$_POST['edad'];
            header('Location: clientes.php');
    } else {
        echo "<script>alert('Nombre, Apellido y Edad del Cliente son Obligatorios');";
        echo "window.location.href='editarCliente.php?pos=$pos';</script>";
    }
}

?>