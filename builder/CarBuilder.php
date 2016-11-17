<?php
namespace Builder;

use Builder\CarSpecs;

abstract class CarBuilder
{
    protected $car;

    function __construct() {
        $this->car = new CarSpecs();
    }

    public abstract function buildPreco();

    public abstract function buildDscMotor();

    public abstract function buildAnoDeFabricacao();

    public abstract function buildModelo();

    public abstract function buildMontadora();

    public function getCarro() {
        return $this->car;
    }

}