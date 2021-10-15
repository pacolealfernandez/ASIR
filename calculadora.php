<!DOCTYPE html>
<html>
    <head>
    <title>Calculadora</title>
    </head>
<body>
    <form>
        <fieldset>
            <legend>Calculadora</legend>
        <p>Numero 1:<input type="Text" name="operando1" value=""></p>
        <p>Numero 2:<input type="Text" name="operando2" value=""></p>
        <p><h3>Operaciones</h3></p>
        <input type="Button" name="" value=" + ">
        <input type="Button" name="" value=" - ">
        <input type="Button" name="" value=" X ">
        <input type="Button" name="" value=" / ">
        <input type="Button" name="" value=" % ">
        <br>
        <br> 
        <input type="Button" name="" value=" Resolver ">
        </fieldset>
    </form>

    <h3>Resultado: </h3>

<?php

#Suma
function suma($num1,$num2){

    $res=$num1 + $num2;

    echo "el resultado es: ".$res."<br>";
}

#Resta
function resta($num1,$num2){

    $res=$num1 - $num2;

    echo "el resultado es: ".$res."<br>";
}

#Multiplicacion
function mult($num1,$num2){

    $res=$num1 * $num2;

    echo "el resultado es: ".$res."<br>";
}

#Division
function div($num1,$num2){

    $res=$num1 / $num2;

    echo "el resultado es: ".$res."<br>";
}

#Resto
function Resto($num1,$num2){

    $res=$num1 % $num2;

    echo "el resultado es: ".$res."<br>";
}


?>
</body>

<br>
<p>Volver al inicio</p>
<a href="inicio.html">Inicio</a>
</html>