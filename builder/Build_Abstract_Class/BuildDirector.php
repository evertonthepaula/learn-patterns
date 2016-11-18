<?php
/**
 * Created by PhpStorm.
 * User: epaula
 * Date: 17/11/16
 * Time: 17:04
 */

namespace Builder;

class BuildDirector{

    protected $montadora;

    function __construct(CarBuilder $mont) {
        $this->montadora = $mont;
    }

    public function buildCar(){
        $this->montadora->setPreco();
        $this->montadora->setAnoDeFabricacao();
        $this->montadora->setDscMotor();
        $this->montadora->setModelo();
        $this->montadora->setMontadora();
    }

    public function getCar() {
        return $this->montadora->getCar();
    }

}