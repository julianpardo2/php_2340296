<html>

<head>
<title>Bucle While</title>
</head>

<body>
<h1>Bucle While</h1>
<?php

function es_primo($n) {
    $divisores=0;
    for ($i=1; $i<=$n; $i++) {
        if($n%$i==0) {
            $divisores++;
        }
    }
    if ($divisores==2) {
        return true;
    } else {
        return false;
    }
}

/* Mostraremos el uso de la sentencia While y comenzamos a usar entrada del teclado mediante un formulario simple */
if ( isset( $_POST['number'] )) {
$number = $_POST['number'];
$counter = 0;
$n=1;
while ($counter < $number) {
    if (es_primo($n)) {
        $counter++;
        echo "$n es un numero primo!<br>";
    } 
    $n=$n+1;
}
echo "Se acabo. $n\n";
}
?>
</p>
</body>

</html>

