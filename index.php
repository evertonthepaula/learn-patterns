<?php
header('Content-Type: text/html; charset=utf-8');

require 'vendor/autoload.php';

$newFiat = new \Builder\BuildDirector( new  \Builder\FiatBuilder() );



print_r($newFiat);

echo '<hr>';

$newFiat->buildCar();

echo '<hr>';

print_r($newFiat);
//echo $newFiat->getCarro();

//echo $car->preco;
//echo $newCar->dscMotor;
//echo $newCar->DeFabricacao;
//echo $newCar->modelo;
//echo $newCar->montadora;