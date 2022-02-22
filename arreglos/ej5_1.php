<?php

//var_export($_POST);

$t1 = $_POST['transversal1'];
$t2 = $_POST['transversal2'];

$arreglo1 = explode(";", $t1);
$arreglo2 = explode(",", $t2);


var_export($arreglo1);
echo "<br>";
var_export($arreglo2);
echo "<br>";
/*
var_export(array_intersect($arreglo1, $arreglo2));
echo "<br>";
*/


foreach ($arreglo1 as $pos => $nombre) {
    if (in_array($nombre, $arreglo2)) {
        echo "$nombre esta en las dos transversales<br>";
    }
    /*foreach ($arreglo2 as $key => $segundo) {
        //  0  = 0
        if ($nombre == $segundo) {
            echo "$nombre esta en las dos transversales<br>";
            unset($arreglo1[$pos]);
            unset($arreglo2[$key]);
            break;
        }
    }*/
}
/*
var_export($arreglo1);
echo "<br>";
var_export($arreglo2);
echo "<br>";
*/
?>