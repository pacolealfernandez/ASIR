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
$selector=$_POST["operador"];

#Llamar funciones
switch ($selector) {
    #Suma
    case ' + ':
        $res=suma($prueba1,$prueba2); 
        break;
    
    #Resta
    case ' - ':
        $res=resta($prueba1,$prueba2);
        break;
    
    #Multiplicacion
    case ' X ':
        $res=mult($prueba1,$prueba2);
        break;
        
    #Division
    case ' / ':
        $res=div($prueba1,$prueba2);
        break;

    #Resto
    case ' % ':
        $res=resto($prueba1,$prueba2);
        break;
    
    #Raiz
    case ' √ ':
        $res=raiz($prueba1);
        break;

    #Elevar al cuadrado
    case ' n2 ':
        $res=cuadrado($prueba1);
        break;
    
    #Elevar al cubo
    case ' n3 ':
        $res=cubo($prueba1);
        break;

    #Elevar a cualquier exponente
    case ' xn ':
        $res=n_exp($prueba1);
        break;

    #Fibonacci
    case ' fibonacci ':
        $res=fibonacci($prueba1);

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