<!DOCTYPE html>
<html>
    <head>
    <title>Conversor</title>
    </head>
<body>
<?php

#Formulario

#Recogida de datos

#Punto A
$x1=$_POST["x1"];
$y1=$_POST["y1"];
#Punto B
$x2=$_POST["x2"];
$y2=$_POST["y2"];

#Calculos

$resx=$x1-$x2;
$cdrx=$resx*$resx;
$resy=$y1-$y2;
$crdy=$resy*$resy;
$suma=$cdrx+$crdy;

#Esta funcion ya por mis huevos

function raiz ($suma){
    $res=sqrt($suma);
    echo $res."<br>";
}
echo "La distacia entre el punto A(".$x1.",".$x2.") y el punto B(".$x2.",".$y2.") es : ";
raiz($suma);



?>
</body>

<br>
<br>
<a href="ej2.html">Comprobar con otras coordenadas</a>
</html>

