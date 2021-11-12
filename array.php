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


#Union de arrives
#Clase 12 de noviembre

#funciones de matrices

$colores1=["Verde","Azul","Amarillo","Rojo"];
$colores2=["Verde","Azul","Amarillo","Rojo","Blanco"];

echo "<br>";
#simpre se pone la mayor primero
$resultadoDiferencia= array_diff($colores2,$colores1);
#muestra las dos lineas repitiendose
$resultadoUnion= array_merge($colores2,$colores1);
#mezcla las dos referencias en una sola linea sin repetirse
$resultadoInterseccion=array_intersect($colores2,$colores1);
#Añadir variables
array_push($colores2,"Purpura","Marron","Celeste");

print_r($resultadoDiferencia);
echo "<br>";
print_r($resultadoUnion);
echo "<br>";
print_r($resultadoInterseccion);
echo "<br>";
print_r($colores2);



?>