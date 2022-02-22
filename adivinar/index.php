<?php

session_start();

if(!isset($_SESSION['numran'])){
    $_SESSION['numran']=RAND(1,100);
}
if(isset($_POST['Otravez'])){
    session_destroy();
    header('Location:index.php');
}
$fin=0;
if(isset($_POST['numero'])){
    $elegir=$_POST['numero'];
    if($_SESSION['numran']==$elegir){
        echo "Adivinaste";
        $fin=1;
    }else if($elegir<$_SESSION['numran'] ){
        echo "Pruebe con un numero mas grande";
    }else{
        echo "Pruebe con un numero mas pequeño";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinar</title>
</head>
<body>
    <?php
    if ($fin==0){
        ?>
   <form method="POST">
       <INPUT type="number" name="numero" placeholder="Digite un numero entre 1 y 100"/>
       <button type="submit" name="Adivinar">Adivinar</button>
</form> 
<?php
    }else{

    ?>
    <form method="POST">
    
       <button type="submit" name="Otravez">Vuelve a jugar</button>
</form> 
<?php
    }
    ?>
</body>
</html>