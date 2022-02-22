<?php

if (isset($_POST['num'])) {
    $num = $_POST['num'];
    if ($num>0) {
        echo "<h1>Tabla del $num </h1><br><br>";
        echo "<table>";
        for ($i=1; $i<=10; $i++) {
            echo "<tr>";
            echo "<td>$num</td>";
            echo "<td>*</td>";
            echo "<td>$i</td>";
            echo "<td>=</td>";
            echo "<td>".($num*$i)."</td>";
            echo "</tr>";
        }
        echo "<table>";
    }
}


?>