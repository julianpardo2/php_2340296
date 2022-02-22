<?php

if (isset($_POST['num'])) {
    $num = $_POST['num'];
    if ($num>0) {
        $n1=0;
        $n2=1;
        $pos=3;
        $n3=0;
        if ($num==1 || $num==2) {
            if ($num==1) {
                echo "$n1<br>";
            } else {
                echo "$n2<br>";
            }
        }
        while ($pos<=$num) {
            $n3=$n1+$n2;
            $n1=$n2;
            $n2=$n3;
            $pos++;
        }
        echo "El $num termino de la serie es: $n3 ";
    }
}


?>