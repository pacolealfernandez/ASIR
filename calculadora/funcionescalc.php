<!DOCTYPE html>
<html>
    <head>
    <title>Calculadora</title>
    </head>
<body>
<?php

include 'funcionescalculadora.php';

#Formulario
$prueba1=$_POST["operando1"];
$prueba2=$_POST["operando2"];
$selector=$_POST["operador"];

#Llamar funciones
switch ($selector) {
    #Suma
    case ' + ':
        suma($prueba1,$prueba2); 
        break;
    
    #Resta
    case ' - ':
        resta($prueba1,$prueba2);
        break;
    
    #Multiplicacion
    case ' X ':
        $res=mult($prueba1,$prueba2);
        break;
        
    #Division
    case ' / ':
        div($prueba1,$prueba2);
        break;

    #Resto
    case ' % ':
        resto($prueba1,$prueba2);
        break;
    
    #Raiz
    case ' raiz ':
        raiz($prueba1);
        break;

    #Elevar al cuadrado
    case ' n2 ':
        cuadrado($prueba1);
        break;
    
    #Elevar al cubo
    case ' n3 ':
        $res=cubo($prueba1);
        break;

    #Elevar a cualquier exponente
    case ' xn ':
        n_exp($prueba1,$prueba2);
        break;

    #Fibonacci
    case ' fibonacci ':
        echo "El resultado es: 0 ";
        fibonacci($prueba1-1);
        break;
    
    default:
        echo "Intentelo de nuevo mas tarde";
        break;
}

?>
</body>

<br>
<p>Realizar otra operacion</p>
<a href="calculadora.html">Calculadora</a>
</html>