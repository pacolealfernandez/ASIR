<!DOCTYPE html>
<html>
    <head>
    <title>Calculadora</title>
    </head>
<body>
<?php

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

    echo "El resultado es: ".$n2."<br>";
}
}

#Formulario
$prueba1=$_POST["operando1"];
$prueba2=$_POST["operando2"];

#Llamar funciones

suma($prueba1,$prueba2);
resta($prueba1,$prueba2);
mult($prueba1,$prueba2);
div($prueba1,$prueba2);
resto($prueba1,$prueba2);
raiz($prueba1);
cuadrado($prueba1);
cubo($prueba1);
n_exp($prueba1,$prueba2);
fibonacci($prueba1);

?>
</body>

<br>
<p>Realizar otra operacion</p>
<a href="calculadora.html">Calculadora</a>
</html>