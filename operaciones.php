<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $resultado=0;
        if (isset($_REQUEST['n1'])  &&  isset($_REQUEST['n2'])) {
            $opt=$_REQUEST['opt'];
            $n1 = $_REQUEST['n1'];
            $n2 = $_REQUEST['n2'];
            if ($opt=='+') {
                $resultado=$n1+$n2;
            } elseif ($opt=='-') {
                $resultado=$n1-$n2;
            } elseif ($opt=='*') {
                $resultado=$n1*$n2;
            } else {
                $resultado=$n1/$n2;
            }
        }
    ?>
    <form method="get" action="">
        <label>Numero 1:</label><input type="number" name="n1" />
        <select name="opt">
            <option value="+" >Suma</option>
            <option value="-" >Resta</option>
            <option value="*" >Multiplicación</option>
            <option value="/" >División</option>
        </select>
        <br>
        <label>Numero 2:</label><input type="number" name="n2" />
        <button type="submit">Calcular</button><br>
        <label>Resultado:</label>
        <input type="number" name="resultado" value="<?php echo $resultado; ?>">
    </form>
</body>
</html>