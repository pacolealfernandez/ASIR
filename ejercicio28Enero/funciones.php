<?php

include ('arraysdb.php');

#mediaVuelo

function mediavuelo ($duracion,$id){
$i=0;
$numero=0;
foreach ($duracion as $vuelo) {
    $tiempo=$vuelo["Tiempo"];
    $nvuelo=$vuelo["Vuelo"];
    if ($nvuelo == $id) {
        $numero=$numero+$tiempo;
        $i++;
    }
}
echo $numero/$i;
}



?>
