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


?>
</body>
<p>Realizar otra operacion</p>
<a href="EstadisticasAvion.html">VUELO</a>
</html>