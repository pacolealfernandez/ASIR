<?php

#NO FUNCIONA

if ( ! empty ($_POST) ) {
    
    if ( isset ($_POST ["text1"] ) && isset ($_POST ["text2"] ) ) {

        echo "Por favor, introduzca informacion. Nombre y Apellidos". "<br>";
    }else {

        
        echo "Nombre: " . $_POST["text1"] . "<br>";
        echo "Apellidos: " . $_POST["text2"] . "<br>";
    }
} else {

    echo "Por favor, introduzca informacion. Formulario vacio" . "<br>";
}


?>