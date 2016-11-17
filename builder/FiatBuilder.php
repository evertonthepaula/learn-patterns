<?php
/**
 * Created by PhpStorm.
 * User: epaula
 * Date: 17/11/16
 * Time: 14:14
 */

namespace Builder;

use Builder\CarBuilder;

class FiatBuilder extends CarBuilder
{
    function __construct() {
        parent::__construct();
    }

    //@Override
    public function buildPreco() {
        // Operação complexa.
        $this->car->preco = 25000.00;
    }

    //@Override
    public function  buildDscMotor() {
        // Operação complexa.
        $this->car->dscMotor = "Fire Flex 1.0";
    }

    //@Override
    public function buildAnoDeFabricacao() {
        // Operação complexa.
        $this->car->anoDeFabricacao = 2011;
    }

    //@Override
    public function buildModelo() {
        // Operação complexa.
        $this->car->modelo = "Palio";
    }

    //@Override
    public function buildMontadora() {
        // Operação complexa.
        $this->car->montadora = "Fiat";
    }


}