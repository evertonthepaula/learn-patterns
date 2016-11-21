<?php
header('Content-Type: text/html; charset=utf-8');

require __DIR__ . '/../../vendor/autoload.php';

$vehicle = new \Factory\FactoryVehicle();

$newCar = $vehicle->createAuto()->getInfo();
$newBicile = $vehicle->createBicycle()->getInfo();


foreach($newCar as $car){
    echo $car . "<br>";
}

echo '<hr>';

foreach($newBicile as $item){
    echo $item . "<br>";
}