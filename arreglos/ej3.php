<?php
/**
 * Generar 10 numeros randomicos enteros positivos 
 * entre 1 y 100 y almacenarlos en un arreglo.
 * Divida en dos arreglos $a y $b los numeros pares e
 * impares respectivamente.
*/
$numeros=[];

for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1,100);
}
var_export($numeros);
echo "<br>";
$pares=[];
$impares=[];

foreach($numeros as $n) {
    if ($n%2==0) {
        $pares[] = $n;
    } else {
        $impares[] = $n;
    }
}

var_export($pares);
echo "<br>";
var_export($impares);
echo "<br>";
unset($numeros[1]);
var_export($numeros);
echo "<br>";

?>