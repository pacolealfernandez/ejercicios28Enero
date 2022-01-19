<?php

#destino

$destino=array(
    "Vueling-AE12" => "Milán",
    "Volotea-EA21" => "Roma",
    "Iberia-WE44" => "Estambul",
    "Ryanair-EW44" => "Madrid",
    "Vueling-ZK87" => "Lima",
    "Volotea-UA21" => "Bilbao",
    "Iberia-WH44" => "Roma",
    "Ryanair-EL00" => "Madrid",
    "Vueling-AE12" => "Roma",
    "Volotea-EA21" => "Roma");

#fabricanteAvion

$fabricante=array(
    "Vueling-AE12" => "Boeing",
    "Volotea-EA21" => "Airbus",
    "Iberia-WE44" => "Airbus",
    "Ryanair-EW44" => "Boeing",
    "Vueling-ZK87" => "Airbus",
    "Volotea-UA21" => "Boeing",
    "Iberia-WH44" => "Boeing",
    "Ryanair-EL00" => "Airbus");

#duracionViaje

$duracion=array(
    array("Vuelo"=>"Vueling-AE12","Tiempo"=>"120"),
    array("Vuelo"=>"Volotea-EA21","Tiempo"=>"100"),
    array("Vuelo"=>"Iberia-WE44","Tiempo"=>"340"),
    array("Vuelo"=>"Ryanair-EW44","Tiempo"=>"45"),
    array("Vuelo"=>"Vueling-ZK87","Tiempo"=>"600"),
    array("Vuelo"=>"Volotea-UA21","Tiempo"=>"65"),
    array("Vuelo"=>"Iberia-WH44","Tiempo"=>"90"),
    array("Vuelo"=>"Ryanair-EL00","Tiempo"=>"50"),
    array("Vuelo"=>"Vueling-AE12","Tiempo"=>"115"),
    array("Vuelo"=>"Volotea-EA21","Tiempo"=>"100"),
    array("Vuelo"=>"Iberia-WE44","Tiempo"=>"85"),
    array("Vuelo"=>"Ryanair-EW44","Tiempo"=>"360")
);
    /*"Vueling-AE12" => "120",
    "Volotea-EA21" => "100",
    "Iberia-WE44" => "340",
    "Ryanair-EW44" => "45",
    "Vueling-ZK87" => "600",
    "Volotea-UA21" => "65",
    "Iberia-WH44" => "90",
    "Ryanair-EL00" => "50",
    "Vueling-AE12" => "115",
    "Volotea-EA21" => "100",
    "Iberia-WE44" => "85",
    "Ryanair-EW44" => "360");*/

#numeroPasajeros

$pasajeros=array(
    array("Vuelo"=>"Vueling-AE12","Pasajeros"=>"90"),
    array("Vuelo"=>"Volotea-EA21","Pasajeros"=>"75"),
    array("Vuelo"=>"Iberia-WE44","Pasajeros"=>"100"),
    array("Vuelo"=>"Ryanair-EW44","Pasajeros"=>"100"),
    array("Vuelo"=>"Vueling-ZK87","Pasajeros"=>"77"),
    array("Vuelo"=>"Volotea-UA21","Pasajeros"=>"93"),
    array("Vuelo"=>"Iberia-WH44","Pasajeros"=>"86"),
    array("Vuelo"=>"Ryanair-EL00","Pasajeros"=>"75"),
    array("Vuelo"=>"Vueling-AE12","Pasajeros"=>"87"),
    array("Vuelo"=>"Volotea-EA21","Pasajeros"=>"97"),
    array("Vuelo"=>"Iberia-WE44","Pasajeros"=>"81"),
    array("Vuelo"=>"Ryanair-EW44","Pasajeros"=>"75"),
    array("Vuelo"=>"Vueling-ZK87","Pasajeros"=>"87"),
    array("Vuelo"=>"Volotea-UA21","Pasajeros"=>"90"),
    array("Vuelo"=>"Iberia-WH44","Pasajeros"=>"84"),
    array("Vuelo"=>"Ryanair-EL00","Pasajeros"=>"67"),
    array("Vuelo"=>"Vueling-AE12","Pasajeros"=>"86"),
    array("Vuelo"=>"Volotea-EA21","Pasajeros"=>"66"),
    array("Vuelo"=>"Iberia-WE44","Pasajeros"=>"40"),
    array("Vuelo"=>"Ryanair-EW44","Pasajeros"=>"77"),
    array("Vuelo"=>"Vueling-ZK87","Pasajeros"=>"82")
);
    /*"Vueling-AE12" => "90",
    "Volotea-EA21" => "75",
    "Iberia-WE44" => "100",
    "Ryanair-EW44" => "60",
    "Vueling-ZK87" => "77",
    "Volotea-UA21" => "93",
    "Iberia-WH44" => "86",
    "Ryanair-EL00" => "75",
    "Vueling-AE12" => "87",
    "Volotea-EA21" => "97",
    "Iberia-WE44" => "81",
    "Ryanair-EW44" => "75",
    "Vueling-ZK87" => "87", 
    "Volotea-UA21" => "90",
    "Iberia-WH44" => "84",
    "Ryanair-EL00" => "67",
    "Vueling-AE12" => "86",
    "Volotea-EA21" => "66",
    "Iberia-WE44" => "40",
    "Ryanair-EW44" => "77",
    "Vueling-ZK87" => "82");*/
/*
    $count=0;
    $numero=0;
    foreach ($duracion as $vuelo) {
        $tiempo=$vuelo["Tiempo"];
        $nvuelo=$vuelo["Vuelo"];

        if ($nvuelo == $id) {
            $numero=$numero+$tiempo;
        }
    }
echo $numero;*/

?>
