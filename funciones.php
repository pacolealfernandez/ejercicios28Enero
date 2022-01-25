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

function nCiudades ($destino){
    foreach ($destino as $ndesti) {
        $ndes=$ndesti["Destino"];
        if ($ndes == $ndes) {
           echo $ndes;
        }
    }
 
}
    
function cuenta_veces_valor($array, $valor) {
    $contadores = array_count_values($array);
    return $contadores[$valor];
}

?>