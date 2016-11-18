<?php
namespace CreationalBuilder;

use CreationalBuilder\CarSpecs;

abstract class CarBuilder
{
    protected $car;

    function __construct() {
        $this->car =  new CarSpecs() ;
    }

    public abstract function setPreco();

    public abstract function setDscMotor();

    public abstract function setAnoDeFabricacao();

    public abstract function setModelo();

    public abstract function setMontadora();

    public function getCar() {
        return $this->car;
    }

}