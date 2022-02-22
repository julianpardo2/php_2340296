<?php

$num1=$_POST['numero1'];
$num2=$_POST['numero2'];

for($i=1;$i<=$num1;$i++) {
    if ($num1%$i==0) {
        if ($num2%$i==0) {
            echo " $i <br>";
        }
    }
}

?>