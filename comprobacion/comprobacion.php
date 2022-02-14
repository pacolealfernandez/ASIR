<?php

$lista=fopen("migelito.txt","w+");

if ($lista == false) {
    echo "ERROR NO SE HA CREADO";
}else {
   #Escribir en el fichero

   fwrite($lista,"Miguel Romero Pérez\r\n");
   fwrite($lista,"Manuel Martinez Barranco\r\n");
   fflush($lista);
}

fclose($lista);

#NO FUNCIONA
/*
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
*/


?>