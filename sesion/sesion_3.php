<?php

session_start();
session_destroy();

/*unset($_SESSION['numero']);
unset($_SESSION['contador']);
unset($_SESSION['suma']);*/

header('Location: index1.php');


?>