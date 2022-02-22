<?php

function validar_pares() {
    global $impares, $pares;
    $num = rand(1,100);
    echo "El numero $num <br>";
    if($num%2) {
        $impares++;
    } else {
        $pares++;
    }
}


$pares=0;
$impares=0;

for ($i = 0; $i<30; $i++) {
    validar_pares();
}
echo "Se generaron $impares numeros impares<br>";
echo "Se generaron $pares numeros pares<br>";

?>