<!DOCTYPE html>
<html>
    <head>
    <title>Conversor</title>
    </head>
<body>
<?php

#Formulario

#Recogida de datos

$texto=$_POST["texto"];

#INvierte el texto

$res=strrev($texto);

#Comparador

if ($res==$texto) {
    echo "El texto introducido: ".$texto." es un palindromo";
}
else {
    echo "El texto introducido: ".$texto." NO es un palindromo";
}


?>
</body>

<br>
<a href="ej3.html">Comprobar otra palabra</a>
</html>

