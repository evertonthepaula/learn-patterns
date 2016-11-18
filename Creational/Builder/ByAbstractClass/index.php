<?php
header('Content-Type: text/html; charset=utf-8');

require __DIR__ . '/../../../vendor/autoload.php';

$newFiat =  new \Builder\ByAbstractClass\BuildDirector( new \Builder\ByAbstractClass\FiatBuilder() );

$newFiat->buildCar();
$carroFiat = $newFiat->getCar();

foreach($carroFiat as $item){
    echo $item . "<br>";
}