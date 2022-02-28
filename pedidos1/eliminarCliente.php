<?php
session_start();
if (isset($_GET['pos'])) {
    $pos= $_GET['pos'];
    unset($_SESSION['clientes'][$pos]);
    unset($_SESSION['apellidos'][$pos]);
    unset($_SESSION['edades'][$pos]);
}
header('Location: clientes.php');

?>