<?php

#Array normalitos
$numero = array (8, 3, 7, 1);

$suspensos = array("Miguel","Kerry");

$coches = array("Ferrari","Seat","BMW","Opel","Mercedes");


echo $suspensos[0]."<br>";

echo $numero[3]."<br>";

echo $coches[1]."<br>";

$cuentacoches= count($coches);

echo "El numero de coches es: ". $cuentacoches."<br>";

$aleatorio=rand(0,$cuentacoches-1);

echo "Coche aleatorio: ". $coches[$aleatorio]."<br>";

$parada=0;
while ($parada < $cuentacoches-1) {
    
    $aleatorio=rand(0,$cuentacoches-1);
    echo $coches[$aleatorio]."<br>";
    $parada++;

}

#Arrray asociativos

$alumno = array("Nombre" => "Miguel",
                "Apellidos"=>"Kerry",
                "Edad"=>23,
                "estaaprobado"=>false);
            
echo "El alumno es: ".$alumno["Nombre"]." ".$alumno["Apellidos"]." ".$alumno["Edad"];



?>