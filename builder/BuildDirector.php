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

        $this->montadora.buildPreco();

        print_r($this->montadora);
    }

    public function buildCar(){
        $this->montadora.buildPreco();
        $this->montadora.buildAnoDeFabricacao();
        $this->montadora.buildDscMotor();
        $this->montadora.buildModelo();
        $this->montadora.buildMontadora();
    }

    public function getCarro() {
        return $this->montadora.getCarro();
    }

}