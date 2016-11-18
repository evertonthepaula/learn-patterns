<?php
header('Content-Type: text/html; charset=utf-8');

require '../vendor/autoload.php';

$newFiat = new \Builder\BuildDirector( new  \Builder\FiatBuilder() );
$newFiat->buildCar();
$carroFiat = $newFiat->getCar();

foreach($carroFiat as $item){
    echo $item . "<br>";
}