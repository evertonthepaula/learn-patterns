<?php
/**
 * Created by PhpStorm.
 * User: epaula
 * Date: 18/11/16
 * Time: 17:49
 */

namespace Factory;


class FactoryAutomobile implements IAutomobileFactory
{
    public $QtdWheels;
    public $Qtdpassengers;
    public $QtdCapacity;

    public $engine;

    function __construct()
    {
        $this->QtdWheels = 4;
        $this->Qtdpassengers = 5;
        $this->QtdCapacity = 500;

        $this->engine = "Rotative Wankel 1.3 Liters";
    }

}