<?php
/**
 * Generar 10 numeros randomicos enteros positivos 
 * entre 1 y 5 y almacenarlos en un arreglo. Imprimir 
 * cuantos elementos tiene el arreglo de cada valor 
 * posible.
*/
$numeros=[];

for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1,5);
}

var_export($numeros);
echo "<br>";

for ($i = 1; $i <=5; $i++) {
    $contador=0;
    foreach ($numeros as $n) {
        if ($n==$i) {
            $contador++;
        }
    }
    echo "Del valor $i se tienen $contador elementos en el arreglo<br>";
}

$sumas=array(1=>0, 2=>0, 3=>0, 4=>0, 5=>0);
foreach($numeros as $n) {
    $sumas[$n]++;
}
var_export($sumas);




?>
