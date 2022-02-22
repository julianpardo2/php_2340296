<?php

$num1=rand(1,100);
$num2=rand(1,100);
while ($num2==$num1) {
    $num2=rand(1,100);
}
$num3=rand(1,100);
while ($num3==$num1 || $num3==$num2) {
    $num3=rand(1,100);
}

echo "Numero 1 = " . $num1 . "<br>";
echo "Numero 2 = " . $num2 . "<br>";
echo "Numero 3 = " . $num3 . "<br>";

$mayor=$menor=$num1;

if (($num1>=$num2) && ($num1>=$num3)) {
    $mayor=$num1;
} elseif (($num2>=$num1) && ($num2>=$num3)) {
    $mayor=$num2;
} else {
    $mayor=$num3;
}

if (($num1<=$num2) && ($num1<=$num3)) {
    $menor=$num1;
} elseif (($num2<=$num1) && ($num2<=$num3)) {
    $menor=$num2;
} else {
    $menor=$num3;
}

$mitad = ($num1+$num2+$num3)-($mayor+$menor);

echo "Numeros en orden ascendente $menor, $mitad, $mayor <br>";
$impares=0;
$pares=0;
for ($i=$menor; $i<=$mitad; $i++) {
    if ($i%2==0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "Entre $menor y $mitad <br>";
echo "La cantidad de numeros pares son $pares <br>".
    "La cantidad de numeros impares son $impares <br>";

for ($i=$mitad; $i<=$mayor; $i++) {
    $divisores=0;
    for ($j=1; $j<=$i; $j++) {
        if ($i%$j==0) {
            $divisores++;
        }
    }
    if ($divisores==2) {
        echo "$i es un numero primo <br>";
    }
}

?>