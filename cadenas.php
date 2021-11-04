<!DOCTYPE html>
<html>
    <head>
    <title>Cadenas</title>
    </head>
<body>
<?php

    #Formulario
    $text1=$_POST["text1"];
    $text2=$_POST["text2"];
    $text3=$_POST["text3"];
    $operador = $_POST["operacion"];

    #Funciones

    #Cuenta caracteres
    function cuentac($text1){
        $res=strlen($text1);
        echo "El texto '" . $text1 .  "' tiene " . $res . " caracteres";
    }

    #Cuenta palabras
    function cuentap($text1){
        $res=str_word_count($text1);
        echo "El texto '" . $text1 .  "' tiene " . $res . " palabras";

    }

    #Invierte texto
    function invierte($text1){
        $res=strrev($text1);
        echo "El texto '" . $text1 . "' invertido es " . $res;
    }

    #Busqueda
    function busqueda($text1, $text2){
        $res=strpos($text1,$text2);
          if ($res==True) {
            echo "La palabra '" . $text2 . "' esta en el texto";
        } else {
            echo "La palabra '" . $text2 . "' no esta en el texto";
        }
        
    }

    #Reemplaza
    function reemplaza($text3,$text2,$text1){
        $res=str_replace($text3,$text2,$text1);
        echo "La nueva frase es: " . $res;
    }

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