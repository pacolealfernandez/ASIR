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

#Destinos

destino ($destino,$id);

#Fabricante

fabricante ($fabricante,$id);

#Minutos totales

minutosTotales ($duracion,$id);

#Media de horas voladas total

mediaHorasvo ($duracion,$id);

#Media pasajeros

mediaPasajeros ($pasajeros,$id);

#Pasajeros totales

pasajerosTotales ($pasajeros,$id);

#Ejercicio 2

Horasvo ($duracion,$id);

#Ejercicio 3

mediaCombustible ($combustible,$id);

#Media minutos  (Ejercicio 6)

medMin ($duracion,$id);

?>
</body>
<p>Realizar otra operacion</p>
<a href="EstadisticasAvion.html">VUELO</a>
</html>