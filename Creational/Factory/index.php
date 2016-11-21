<?php
header('Content-Type: text/html; charset=utf-8');

require __DIR__ . '/../../vendor/autoload.php';

$vehicle = new \Factory\FactoryVehicle();

$da = new \Factory\FactoryAutomobile();

$newCar = $vehicle->createAuto();



foreach($newCar as $item){
    echo $item . "<br>";
}