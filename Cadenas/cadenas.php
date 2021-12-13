<!DOCTYPE html>
<html>
    <head>
    <title>Cadenas</title>
    </head>
<body>
<?php

include 'funcionesCadenas.php';

    #Formulario
    $text1=$_POST["text1"];
    $text2=$_POST["text2"];
    $text3=$_POST["text3"];
    $operador = $_POST["operacion"];

    #Llamar funciones
    switch ($operador) {
        #Cuenta caracteres
        case 'cuentac':
            cuentac($text1);
            break;

        #Cuenta palabras
        case 'cuentap':
            cuentap($text1);
            break;

        #Invierte texto
        case 'invierte':
            invierte($text1);
            break;
    
        #Busqueda
        case 'busq':
            busqueda($text1, $text2);
            break;

        #Reemplaza
        case 'reem':
            reemplaza($text3,$text2,$text1);
            break;

        
        default:
            echo "La cagaste wey";
            break;
        }

?>
</body>

<br>
<br>
<p>Realizar otra cadena</p>
<a href="cadenas.html">Cadenas</a>
</html>