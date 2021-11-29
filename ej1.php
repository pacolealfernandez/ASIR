<!DOCTYPE html>
<html>
    <head>
    <title>Conversor</title>
    </head>
<body>
<?php

#Formulario

#Recogida de datos

$sueldo=$_POST["sueldo"];

#Funciones

#Menos de 10000

function tipo1 ($sueldo){

    $res=$sueldo*0.5;
    
    echo "Su tipo inpositivo es 5%"."<br>";
    echo "Tienes que pagar ".$res."<br>";

}

#Entre 10000 y 20000

function tipo2 ($sueldo){

    $res=$sueldo*0.15;
    
    echo "Su tipo inpositivo es 15%"."<br>";
    echo "Tienes que pagar ".$res."<br>";

}

#Entre 20000 y 35000

function tipo3 ($sueldo){

    $res=$sueldo*0.20;
    
    echo "Su tipo inpositivo es 20%"."<br>";
    echo "Tienes que pagar ".$res."<br>";

}

#Entre 35000 y 60000

function tipo4 ($sueldo){

    $res=$sueldo*0.30;
    
    echo "Su tipo inpositivo es 30%"."<br>";
    echo "Tienes que pagar ".$res."<br>";

}

#Mas de 60000

function tipo5 ($sueldo){

    $res=$sueldo*0.45;
    
    echo "Su tipo inpositivo es 45%"."<br>";
    echo "Tienes que pagar ".$res."<br>";

}

#IF llamando funciones

#Menos de 10000

if ($sueldo<10000) {
    tipo1($sueldo);
}

#Entre 10000 y 20000

elseif (('10000'>=$sueldo) | ($sueldo<'20000')) {
    tipo2($sueldo);
}

#Entre 20000 y 35000

elseif (('20000'>=$sueldo) | ($sueldo<'35000')) {
    tipo3($sueldo);
}

#Entre 35000 y 60000

elseif (('35000'>=$sueldo) | ($sueldo<'60000')) {
    tipo4($sueldo);
}

#Mas de 60000

else {
    tipo5($sueldo);
}

?>
</body>

<br>
<a href="ej1.html">Comprobar renta con otro sueldo</a>
</html>

