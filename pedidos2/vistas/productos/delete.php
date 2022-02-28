<?php

session_start();

if (isset($_GET['id'])) {
    unset($_SESSION['productos'][$_GET['id']]);
    header('Location: index.php');
} else {
    echo "<script>alert('Acceso no valido');</script>";
    echo "<a href='index.php'>Volver al Inicio</a>";
}



?>