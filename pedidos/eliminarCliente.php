<?php
session_start();
if (isset($_GET['pos'])) {
    $pos= $_GET['pos'];
    unset($_SESSION['clientes'][$pos]);
}
header('Location: clientes.php');

?>