  <!DOCTYPE html>
<htmllang="es">
<head>
<metacharset="UTF-8">
<metahttp-equiv="X-UA-Compatible"content="IE=edge">
<metaname="viewport"content="width=device-width, initial-scale=1.0">
<title>Ejercicio Fechas</title>
</head>
<body>
<h2>Ejercicio de tratamiento de fechas</h2>
<p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
<?php

//Introducción

echo"<h2>Vamos a trabajar con fechas</h2>";
echo"Hoy es: ".date("l")."<br>";
echo"Dime la fecha actual: ".date("d/m/Y")."<br>";

//Ejercicio if

echo "<h3>Ejercicio ejemplo if-else</h3>"."<br>";

$hora = date("H:i:s");

if($hora<15){
echo"Estoy en clase"."<br>";
echo"Hora".$hora;

}else{
  echo"Estoy en casa"."<br>";
  }

//Ejercicio elseif

  echo "<h3>Ejercicio ejemplo elseif</h3>"."<br>";

  $segundos = date("s");

  if($segundos<"10"){
    echo"Primeros 10 segundos"."<br>";
    echo"Segundos".$segundos;

  }elseif($segundos>"50"){
    echo"Ultimos 10 segundos"."<br>";
    echo"Segundos".$segundos;
 
  }else{
    echo"Segundos intermedios"."<br>";
    echo"Segundos".$segundos;
      }
    
//Ejercicio ejemplo switch

echo "<h3>Ejercicio ejemplo switch</h3>"."<br>";

$colores = "Rojo";

switch ($colores) {
  case 'Rojo':
    echo "La sangre es de color: ".$colores."<br>";
    break;
  
  case 'Amarillo':
    echo "La hierba es de color: ".$colores."<br>";
    break;

  case 'Amarillo':
    echo "El sol es de color: ".$colores."<br>";
    break; 
  
  case 'Azul':
    echo "El cielo es de color: ".$colores."<br>";
    break; 

  default:
  echo "El color: ".$colores."no esta registrado."."<br>";
    break;
}

?>

</body>
</html>
