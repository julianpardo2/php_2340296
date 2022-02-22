<?php

$arreglo=[1,1.01,'@',"Freddy"];
//$arreglo=array();
$arreglo[5]="Mendez";

var_export($arreglo);

echo var_dump($arreglo);

/*for ($i=0; $i< count($arreglo); $i++) {
    echo $arreglo[$i]."<br>";
}

foreach($arreglo as $key=>$value) {
    echo "indice $key => valor $value <br>";
}*/

$asistencia = array('lunes'=>12, 'martes'=>13, 'miercoles'=>15);

echo var_dump($asistencia);
$suma =0;
foreach($asistencia as $value) {
    echo " $value <br>";
    $suma = $suma + $value;
}
echo "La suma es: $suma";


?>