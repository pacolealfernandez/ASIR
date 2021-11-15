<!DOCTYPE html>
<html>
    <head>
    <title>Vuelos</title>
    </head>
<body>
<?php

#Formulario

#Recogida de datos

if(isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])){

#Vuelo1

$vuelo1=$_POST["infovuelo1"];
    $codigo1=$vuelo1["codigo1"];
    $origen1=$vuelo1["origen1"];
    $destino1=$vuelo1["destino1"];
    $precio1=$vuelo1["precio1"];
    $fecha1=$vuelo1["fecha1"];

#Vuelo2

$vuelo2=$_POST["infovuelo2"];
    $codigo2=$vuelo2["codigo2"];
    $origen2=$vuelo2["origen2"];
    $destino2=$vuelo2["destino2"];
    $precio2=$vuelo2["precio2"];
    $fecha2=$vuelo2["fecha2"];

#Herramientas

$selector=$_POST["herramientas"];

#Funciones

#Unir

function une ($vuelo1,$vuelo2){

    $var=array_merge($vuelo1,$vuelo2);
    echo"Union de los vuelos: ";
    print_r($var);

}

#Diferencia

function dif ($vuelo1,$vuelo2){

    $var=array_diff($vuelo1,$vuelo2);
    echo"Diferencia de los vuelos: ";
    print_r($var);

}

#Ordenar

function ordena ($vuelo1){

    echo"Datos del vuelo ordenado: ";
    sort($vuelo1);
    print_r($vuelo1);

}

#Informacion comun

function comun ($vuelo1,$vuelo2){

    $var=array_intersect($vuelo1,$vuelo2);
    echo"Datos en comun: ";
    print_r($var);

}


#Lamar funciones

switch ($selector) {

    #Une

    case 'Une':
        une($vuelo1,$vuelo2);
        break;

    #Diferencia

    case 'Diferencia':
        dif($vuelo1,$vuelo2);
        break;

    #Ordenar

    case 'Ordena':
        ordena($vuelo1);
        break;

    #Informacion comun

    case 'Comun':
        comun($vuelo1,$vuelo2);
         break;

    default:
        echo"La liaste wey";
        break;
}

}
?>
</body>

<br>
<p>Comparar otro vuelo</p>
<a href="vuelos.html">Vuelo</a>
</html>