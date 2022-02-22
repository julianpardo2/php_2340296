<?php

$candidatos=[1=>"Biden",2=>"Putin", 3=>"Maduro", 4=>"Voto en Blanco"];
$votos=[];

$resultado=[1=>0,2=>0,3=>0,4=>0];

for($i=0;$i<10;$i++) {
    $votos[]=random_int(1,4);
}

echo "<br>";
var_export($votos);

foreach($votos as $voto) {
    $resultado[$voto]++;
}

echo "<br>";
var_export($resultado);
echo "<br>";
echo "<br>";
$ganador=0;
$num_votos=0;

foreach($resultado as $tarjeton => $cantidad) {
    if ($num_votos<$cantidad) {
        $ganador=$tarjeton;
        $num_votos=$cantidad;
    }
}

if ($num_votos>(count($votos)*0.5)) {
    echo "Tenemmos ganador en primera vuelta $candidatos[$ganador] <br>";
} else {
    echo "Tenemos segunda vuelta<br>";
}

arsort($resultado);

echo "<br>";
var_export($resultado);
echo "<br>";



for ($i=1; $i<=count($resultado); $i++) {
    for ($j=$i+1; $j<=count($resultado); $j++) {
        if ($resultado[$i]<$resultado[$j]) {
            $temp=$resultado[$i];
            $resultado[$i]=$resultado[$j];
            $resultado[$j]=$temp;
            $temp1=$candidatos[$i];
            $candidatos[$i]=$candidatos[$j];
            $candidatos[$j]=$temp1;
        }
    }
}

echo "<br>";
var_export($resultado);
echo "<br>";

echo "El candidato con mayor votación fue: $candidatos[1] ";

?>