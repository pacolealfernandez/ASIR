<?php

include ('arraysdb.php');

#MOSTAR VUELO

#Compañia

function compañia ($compañia,$id){
    foreach ($compañia as $compañ) {
        $compa=$compañ["Compañia"];
        $nvuelo=$compañ["Vuelo"];
        if ($nvuelo == $id) {
            echo "La compania es: ". $compa."<br>";
            }
    }
}

#Media pasajeros

function mediaPasajeros ($pasajeros,$id){
$i=0;
$numero=0;
    foreach ($pasajeros as $pasaje) {
        $pasajero=$pasaje["Pasajeros"];
        $nvuelo=$pasaje["Vuelo"];
        if ($nvuelo == $id) {
            $numero=$numero+$pasajero;
            $i++;
    }
}
echo "La media de este vuelo: ". $numero/$i."<br>";
}

#Últimos destinos

function ultDestinos ($destino,$id){
    echo "Los ultimos destinos son: ";
    foreach ($destino as $ultdest) {
           $ultimo=$ultdest["Destino"];
           $nvuelo=$ultdest["Vuelo"];
           if ($nvuelo == $id) {
              echo $ultimo.", ";
            }
    }
    echo "<br>";
    }

#Fabricante

function fabricante ($fabricante,$id){

foreach ($fabricante as $modelo) {
       $fabrica=$modelo["Fabricante"];
       $nvuelo=$modelo["Vuelo"];
       if ($nvuelo == $id) {
          echo "El fabricante es: ". $fabrica."<br>";
        }
}
}

#Minutos totales

function minutosTotales ($duracion,$id){
    $numero=0;
    foreach ($duracion as $tiempo) {
        $dura=$tiempo["Tiempo"];
        $nvuelo=$tiempo["Vuelo"];
        if ($nvuelo == $id) {
            $numero=$numero+$dura;
        }
    }
    echo "Minutos totales de este vuelo: ". $numero."<br>";
}

#ESTADISTICA DE CIUDADES

#Número totales de ciudades visitadas

function destinos ($destino){
    $arraySimple=array_unique(array_column($destino, 'Destino'));
    $arrayLimpio=array_intersect_key($destino,$arraySimple);
    echo "El numero total de ciudades visitadas son: ".count($arrayLimpio)."<br>";
}

#Veces que se ha ido a una ciudad
 
function visitas ($destino){
    $visitas=array_count_values(array_column($destino, 'Destino'));
    echo "<strong>Veces que se ha visitado cada ciudad: </strong>"."<br>";
    foreach ($visitas as $visit => $num) {
    echo $visit . ": " . $num . "<br>";
 }
}

#Ciudad mas visitadas

function maxvisitas ($destino){
    $masvisitas=max(array_column($destino, 'Destino'));
    echo "La ciudad mas visitada es: " . $masvisitas . "<br>";
}

#Ciudades menos visitadas

function minvisitas ($destino){
    $num=array_count_values(array_column($destino, 'Destino'));
    echo "<strong>Las ciudades menos visitadas son: </strong>"."<br>";
    foreach ($num as $numvi => $nume) {
        $minvisitas=min(array_count_values($num));
        if ($nume == $minvisitas) {
            echo $numvi . "<br>";
        }
    }
}

#ESTADISTICA DEL AEROPUERTO

#Media de horas voladas total

function mediaHoras ($duracion){
    $i=0;
    $numero=0;
        foreach ($duracion as $tiemp) {
            $tempo=$tiemp["Tiempo"];
            $numero=$numero+$tempo;
            $i++;
        }
            $total=$numero/$i;
            $horas = $total/60;
    echo "La media de horas de todos los vuelos son: ". $horas . "h" ."<br>";
}

#Numero total de pasajeros

function totalPasajeros ($pasajeros){
    $numero=0;
        foreach ($pasajeros as $pasaje) {
            $pasajero=$pasaje["Pasajeros"];
            $numero=$numero+$pasajero;
        }
    echo "Numero de pasajeros totales: ". $numero ."<br>";
}

#Numero de aviones por fabricantes

function numFabricante ($fabricante){
    $fabrica=array_count_values(array_column($fabricante, 'Fabricante'));
    echo "<strong>Aviones que poseen los fabricantes: </strong>"."<br>";
    foreach ($fabrica as $fabri => $num) {
    echo $fabri . ": " . $num . "<br>";
 }
}

#Ciudad con mas conexiones 

function maxConexiones ($destino){
    $masConexiones=max(array_column($destino, 'Destino'));
    echo "La ciudad con mas conexiones es: " . $masConexiones . "<br>";
}

#Ciudad con menos conexiones

function minConexiones ($destino){
    $num=array_count_values(array_column($destino, 'Destino'));
    echo "<strong>Las ciudades con menos conexiones son: </strong>"."<br>";
    foreach ($num as $numco => $nume) {
        $minConexiones=min(array_count_values($num));
        if ($nume == $minConexiones) {
            echo $numco . "<br>";
        }
    }
}

#Destinos

function destino ($destino,$id){
    echo "Los destinos de este vuelo son: ";
    foreach ($destino as $ultdest) {
           $ultimo=$ultdest["Destino"];
           $nvuelo=$ultdest["Vuelo"];
           if ($nvuelo == $id) {
              echo $ultimo.", ";
            }
    }
    echo "<br>";
    }

#Media de horas voladas total

function mediaHorasvo ($duracion,$id){
    $i=0;
    $numero=0;
        foreach ($duracion as $tiemp) {
            $tempo=$tiemp["Tiempo"];
            $nvuelo=$tiemp["Vuelo"];            
           if ($nvuelo == $id) {
            $numero=$numero+$tempo;
            $i++;
            
            }
        }
        $total=$numero/$i;
        $horas = $total/60;
    echo "La media de horas de todos los vuelos son: ". $horas . "h" ."<br>";
}

#Media pasajeros

function pasajerosTotales ($pasajeros,$id){
    $numero=0;
        foreach ($pasajeros as $pasaje) {
            $pasajero=$pasaje["Pasajeros"];
            $nvuelo=$pasaje["Vuelo"];
            if ($nvuelo == $id) {
                $numero=$numero+$pasajero;
        }
    }
    echo "Los pasajeros totales son: ". $numero."<br>";
    }

#PRACTICA

#Horas totales (Ejercicio 2)

function Horasvo ($duracion,$id){
    
    echo"<h1>Practica</h1>";
    $numero=0;
        foreach ($duracion as $tiemp) {
            $tempo=$tiemp["Tiempo"];
            $nvuelo=$tiemp["Vuelo"];            
           if ($nvuelo == $id) {
            $numero=$numero+$tempo;
            }
        }
        $horas = $numero/60;
    echo "Las horas de este vuelos: ". $horas . "h" ."<br>";
}

#Media combustible (Ejercicio 7)

function mediaCombustible ($combustible,$id){
    $i=0;
    $numero=0;
        foreach ($combustible as $combustible) {
            $cobust=$combustible["Combustible"];
            $nvuelo=$combustible["Vuelo"];            
           if ($nvuelo == $id) {
            $numero=$numero+$cobust;
            $i++;
            
            }
        }
        $total=$numero/$i;
    echo "La media de combustible de un avion: ". $total . " litros" ."<br>";
}

#Media minutos  (Ejercicio 6)

function medMin ($duracion,$id){
    $i=0;
    $numero=0;
    foreach ($duracion as $tiempo) {
        $dura=$tiempo["Tiempo"];
        $nvuelo=$tiempo["Vuelo"];
        if ($nvuelo == $id) {
            $numero=$numero+$dura;
            $i++;
        }
    }
    $total=$numero/$i;
    echo "la media de minutos de este vuelo son: ". $total."<br>";
}


?>