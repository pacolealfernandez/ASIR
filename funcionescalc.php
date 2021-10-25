<!DOCTYPE html>
<html>
    <head>
    <title>Calculadora</title>
    </head>
<body>
<?php

#Formulario
$prueba1=$_POST["operando1"];
$prueba2=$_POST["operando2"];
$selector=$_POST["operador"];

#Suma
function suma($num1,$num2){

    $res=$num1 + $num2;

    echo "El resultado es: ".$res."<br>";
}

#Resta
function resta($num1,$num2){

    $res=$num1 - $num2;

    echo "El resultado es: ".$res."<br>";
}

#Multiplicacion
function mult($num1,$num2){

    $res=$num1 * $num2;

    echo "El resultado es: ".$res."<br>";
}

#Division
function div($num1,$num2){

    $res=$num1 / $num2;

    echo "El resultado es: ".$res."<br>";
}

#Resto
function resto($num1,$num2){

    $res=$num1 % $num2;

    echo "El resultado es: ".$res."<br>";
}

#Raiz
function raiz($num1){

    $res=sqrt($num1);
    echo "El resultado es: ". $res."<br>";
}

#Elevar al cuadrado
function cuadrado($num1){

    $res=$num1 * $num1;

    echo "El resultado es: ".$res."<br>";
}

#Elevar al cubo
function cubo($num1){

    $res=$num1 * $num1 * $num1;

    echo "El resultado es: ".$res."<br>";
}

#Elevar a cualquier exponente
function n_exp($num1,$num2){

    $res=pow($num1,$num2);

    echo "El resultado es: ".$res."<br>";
}

#Fibonacci
function fibonacci($num1){

    $n=0;
    $n1=1;
    $n2=0;
while ($num1>0) {

    $n2=$n1+$n;
    $n1=$n;
    $n=$n2;
    $num1--;

    echo $n2." ";
}
}

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