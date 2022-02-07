<!DOCTYPE html>
<html>
    <head>
    <title>VUELO</title>
    </head>
<body>
<?php

include 'funciones.php';
$id=$_POST["vuelo"];

mediavuelo($duracion,$id);

?>
</body>
<p>Realizar otra operacion</p>
<a href="mostrarvuelo.html">VUELO</a>
</html>