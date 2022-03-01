<?php

session_start();

$pedido = $_SESSION['pedidos'][$_GET['id']];
echo var_dump($pedido);


?>