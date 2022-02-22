<?php
/**
 * Generar 30 edades randomicas entre 14 y 75 y 
 * almacenarlos en un arreglo.
 * 1. Calcule el promedio de edad
 * 2. Calcule el numero de personas que tienen 
 * la edad menor al promedio de edad
 * 3. Recalcule el promedio de edad solo con la información
 * de las personas que tienen menor edad que el promedio
*/
$edades=[];

for ($i = 0; $i < 30; $i++) {
    $edades[] = rand(14,75);
}
echo var_dump($edades);
echo "<br>";

//$suma=array_sum($edades);
$suma=0;
foreach($edades as $edad) {
    $suma=$suma+$edad;
}
$promedio = $suma/count($edades);

$num_per=0;
foreach($edades as $edad) {
    if ($edad<$promedio) {
        $num_per++;
    }
}
echo "Se tienen $num_per menores al valor $promedio <br>";

$new_suma=0;
foreach($edades as $edad) {
    if ($edad>$promedio) {
        $new_suma+=$edad;
    }
}
$new_promedio = $new_suma/(count($edades)-$num_per);
echo "El nuevo promedio es $new_promedio<br>";