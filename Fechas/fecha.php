<?php

#Repaso

echo date ("Y") ."<br>";
echo date ("d M Y") ."<br>";
echo date ("d/m/y") ."<br>";
echo date ("d/m/y h:i:s") ."<br>";

#Zonas horarias

echo "<h3>Zonas horarias</h3>";

echo "Estoy en la zona de: " . date_default_timezone_get() . "<br>";
echo "Fecha: " . strftime ("%A, %d de %B del %Y - %H:%M:%S") . "<br>";

date_default_timezone_set("Europe/London");
echo "Estoy en la zona de: " . date_default_timezone_get() . "<br>";
echo "Fecha: " . strftime ("%A, %d de %B del %Y - %H:%M:%S") . "<br>";

#Fecha determinada -> 07/02/2022 09:00:00

echo "<h3>Definir fechas</h3>";

$fechita=mktime("09","00","00","02","07","2022");
echo $fechita ."<br>";
echo date ("d/m/y h:i:s",$fechita) ."<br>";

/*

1 minuto = 60 segundos
1 hora = 60*60 = 3600 segundos
1 dia = 24*3600 = 86400 segundos

*/

#Suma 1 dia y 2 horas

$fechita = $fechita + 86400 + 7200;

echo date ("d/m/y h:i:s",$fechita) ."<br>";

#Diferencia

$fecha1=mktime("09","00","00","02","07","2022");
$fecha2=mktime("12","00","00","02","09","2022");

$dif = $fecha2 -$fecha1;


$minutos = $dif/60;
$horas = $dif/3600;
$dias = $dif/86400;

echo "Fecha origen: " . date ("d/m/y h:i:s",$fecha1) ."<br>";
echo "Fecha destino: " . date ("d/m/y h:i:s",$fecha2) ."<br>";

echo $minutos ."<br>";
echo $horas ."<br>";
echo $dias ."<br>";

?>