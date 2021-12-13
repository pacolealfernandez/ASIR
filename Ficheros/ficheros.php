<?php

#Para mostrar el contenido del archivo

echo readfile("pruebaFicheros.txt")."<br>"."<br>";


#Apertura y lectura de un fichero
    
#r para leer

    $fichero = fopen("pruebaFicheros.txt","r") or die("Fallo al abrir el fichero");

    //Obtengo el tamaño del fichero

    $pesofichero = filesize("pruebaFicheros.txt");

    /*Represento por pantalla el contenido, 
    le doy el recurso $fichero y su peso  $pesoFichero */

    echo fread($fichero,$pesofichero);

    //Una vez he terminado de representarlo cierro el recurso

    fclose($fichero);

#w para escribir
    
    $fichero = fopen("pruebaFicheros.txt","w") or die("Fallo al abrir el fichero");

    //Obtengo el tamaño del fichero

    $nuevoTexto="Que te gustan las variables putoo";

    fwrite($fichero,$nuevoTexto);

    //Una vez he terminado de representarlo cierro el recurso

    fclose($fichero);

?>