<!DOCTYPE html>
<html>
    <head>
    <title>VUELO</title>
    </head>
<body>
<?php

include 'funciones.php';

#Formulario

$id=$_POST["vuelo"];

#Llamar funciones

#Compañia

compañia ($compañia,$id);

#Media Pasajeros
    
mediaPasajeros($pasajeros,$id);

#Últimos destinos

ultDestinos ($destino,$id);

#Frabricante

fabricante ($fabricante,$id);

#Minutos totales

minutosTotales ($duracion,$id);

?>
</body>
<p>Realizar otra operacion</p>
<a href="mostrarvuelo.html">VUELO</a>
</html>