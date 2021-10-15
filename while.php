<!DOCTYPE html>
<htmllang="es">
<head>
<metacharset="UTF-8">
<metahttp-equiv="X-UA-Compatible"content="IE=edge">
<metaname="viewport"content="width=device-width, initial-scale=1.0">
<title>Practica while y for</title>
</head>
<body>
<?php

#Introducción

echo"<h2>ejemplos de bucle whiles</h2>";
#while

$numero=0;

while ($numero <= 10) {

#paso 1: mostrar mi numero

    echo "Mi numero es: "."$numero"."<br>";

#paso2: cualizar variable numero

    #$numero++;

    $numero=$numero+1;

}

echo "<h3>"."Ejemplo mas 5"."</h3>";

$numero1=0;

while ($numero1 <= 100) {

    #paso 1: mostrar mi numero
    
        echo "Mi numero es: "."$numero1"."<br>";
    
    #paso2: cualizar variable numero
    
        $numero1=$numero1+5;
    
    }

echo "Mi cuenta ha terminado";

#RANDOM

echo "<h3>"."RANDOM"."</h3>";

$numero2 = 0;
$aleatorio = rand(0,100);

echo "Mi numero aleatorio es: "."$aleatorio"."<br>";
while ($numero2 <= $aleatorio) {

    #paso 1: mostrar mi numero

        echo "Mi numero es: "."$numero2"."<br>";
    
    #paso2: cualizar variable numero
    
        $numero2=$numero2+1;
    
    }

    #for

    echo "<h3>"."FOR"."</h3>";

for ($cuenta=0; $cuenta < 10; $cuenta++) { 
    # accion
    echo "Imprime la cuenta: " . $cuenta . "</br>";
}

echo "<h3>"."FUCTION"."</h3>";

#No hace falta definirlo aqui, si no abajo.s
#$nombre="Miguel";
#$edad=25;
$esmayor=true;

function persona($nombre,$edad){

    echo "Su nombre es: ".$nombre."<br>";

    if ($edad%2==0) {
        
        echo "Su edad es par"."<br>";

    } else{

        echo "Su edad es impar"."<br>";
        
    }
}

#Llamar a la funcion.
persona("Miguel",25);
persona("Adan",22);
persona("Nacho",21);
persona("Paco",20);

echo "<h3>"."ARRAY"."</h3>";

$alumnos = array("Nacho","Gonzalo","Javi","Adan","Manuel","Ivan");

#Cuenta el ARRAY

echo count($alumnos)."<br>";

#Me muestra un nombre al azar del ARRAY

$selectaleatorio = rand(0,5);

echo "El alumno es: ".$alumnos[$selectaleatorio]."<br>";

#Esto falla

#function esNumero($numeroco)

#if (is_int($numroco)) {

    #echo "Es numero";

#} else {

    #echo "No es numero";

#}

#esNumero("hola");

#Nueva funcion

function presenta($nombre,$apellidos,$localidad){

    echo "Mi nombre es ".$nombre." ".$apellidos." y soy de ".$localidad."<br>";

}

presenta("Miguel","Boca","Lora de estepa");


function suma($num1,$num2){

    $res=$num1 + $num2;

    echo "el resultado es: ".$res."<br>";

}

$prueba1=5;
$prueba2=3;
suma(3,2);
suma(3,3);

?>
<br>
<p>Volver al inicio</p>
<a href="inicio.html">Inicio</a>
</body>
</html>
