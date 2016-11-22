<?php
header('Content-Type: text/html; charset=utf-8');

require __DIR__ . '/../../vendor/autoload.php';

$vehicle = new \Factory\FactoryVehicle();

$newCar = $vehicle->createAuto()->getInfo();
$newBicile = $vehicle->createBicycle()->getInfo();
$newMotorcile = $vehicle->createMotorcycle()->getInfo();

foreach($newCar as $car){
    echo $car . "<br>";
}

echo '<hr>';

foreach($newBicile as $item){
    echo $item . "<br>";
}

echo '<hr>';

foreach($newMotorcile as $moto){
    echo $moto . "<br>";
}