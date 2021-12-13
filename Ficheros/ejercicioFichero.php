<?php


$texto=$_POST["texto"];
$sino=$_POST["sino"];

if ($sino == "Si") {

    $fichero = fopen("ejercicioFichero.txt","a") or die("Fallo al abrir el fichero");

    $nuevoTexto=$texto;

    fwrite($fichero,$nuevoTexto);

    fclose($fichero);
    echo readfile("ejercicioFichero.txt");

}
elseif ($sino == "No") {

    echo "El texto se ha guardado";
}

else {
    
    echo readfile("ejercicioFichero.txt");

}


?>