<?php
session_start();
if (!isset($_SESSION['clientes'])) {
    echo "<script>alert('Acceso no permitido');";
    echo "window.location.href='clientes.php';</script>";
} else {
    if (isset($_POST['cliente']) && strlen($_POST['cliente']) > 0) {
        /*if (!in_array($_POST['cliente'],$_SESSION['clientes'])) {
            $_SESSION['clientes'][]=$_POST['cliente'];
            header('Location: clientes.php');
        } else {
            echo "<script>alert('Nombre del Cliente ya existe');window.location.href='clientes.php';</script>";
        }*/
        $existe=0;
        foreach ($_SESSION['clientes'] as $cliente) {
            if ($_POST['cliente'] == $cliente) {
                $existe=1;
                break;
            }
        }
        if ($existe==0) {
            $_SESSION['clientes'][]=$_POST['cliente'];
            header('Location: clientes.php');
        } else {
            echo "<script>alert('Nombre del Cliente ya existe');";
            echo "window.location.href='clientes.php';</script>";
        }
    } else {
        echo "<script>alert('Nombre del Cliente es Obligatorio');";
        echo "window.location.href='clientes.php';</script>";
    }
}
?>