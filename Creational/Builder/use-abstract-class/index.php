<?php
header('Content-Type: text/html; charset=utf-8');

require __DIR__ . '/../../../vendor/autoload.php';

$newFiat =  new CreationalBuilder\BuildDirector( new CreationalBuilder\FiatBuilder() );

$newFiat->buildCar();
$carroFiat = $newFiat->getCar();

foreach($carroFiat as $item){
    echo $item . "<br>";
}