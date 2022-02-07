<?php

#Comprobacion de si existe el fichero

if ( file_exists("../pruebafichero.txt") == true ) {
    echo "El fichero existe";
}else {
    echo "No esta el fichero" . "<br>";
}

#Crea un fichero

$fichero = fopen("migelito.txt","a");

if ($fichero == false) {
    echo "ERROR NO SE HA CREADO" . "<br>";
}else {
    echo "SE HA CREADO CORRECTAMENTE" . "<br>";
}

fclose($fichero);

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

#Leer el fichero

$pesoarchivo = filesize("migelito.txt");

echo readfile("migelito.txt") . "<br>";

$miguel = fopen ("migelito.txt","a+");

echo fread($miguel,$pesoarchivo);

fclose($miguel);

?>