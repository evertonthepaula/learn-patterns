<?php
namespace Builder\ByAbstractClass;

use Builder\ByAbstractClass\CarBuilder;

class FiatBuilder extends CarBuilder
{
    function __construct() {
        parent::__construct();
    }

    //@Override
    public function setPreco() {
        $this->car->preco = 25000.00;
    }

    //@Override
    public function setDscMotor() {
        $this->car->dscMotor = "Fire Flex 1.0";
    }

    //@Override
    public function setAnoDeFabricacao() {
        $this->car->anoDeFabricacao = 2011;
    }

    //@Override
    public function setModelo() {
        $this->car->modelo = "Palio";
    }

    //@Override
    public function setMontadora() {
        $this->car->montadora = "Fiat";
    }


}