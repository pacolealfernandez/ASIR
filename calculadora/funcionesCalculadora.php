<?php
#Funciones

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
?>