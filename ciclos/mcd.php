<?php
$num1=$_POST['numero1'];
$num2=$_POST['numero2'];
$num3=$_POST['numero3'];

$mul=1;


if (($num1>=$num2) && ($num2>=$num3)) {
    $mayor=$num1;
} elseif (($num2>=$num1) && ($num2>=$num3)) {
    $mayor=$num2;
} else {
    $mayor=$num3;
}

for ($i=0; $i<=$mayor; $i++) {
    for ($j=2; $j<=$mayor; $j++) {
        if (($num3%$j==0) && ($num2%$j==0) && ($num1%$j==0)) {
            $num3=$num3/$j;
            $num2=$num2/$j;
            $num1=$num1/$j;
            $mul=$mul*$j;
            $mayor=$mayor/$j;
            break;
        }
    }
}
echo "El máximo común divisor es: $mul";
?>
