<?php
/**
 * Created by PhpStorm.
 * User: epaula
 * Date: 18/11/16
 * Time: 17:49
 */

namespace Factory;


class FactoryMotorcycle extends Vehicle implements IAutomobileFactory
{
    private $engine;

    function __construct()
    {
        $this->setQtdWheels(2);
        $this->setQtdpassengers(2);
        $this->setQtdCapacity(0);
        $this->setgearshift(4);
        $this->setmaker('Honda');

        $this->engine = 'OHC, Monocilíndrico 4 tempos, arrefecido a ar';
    }

    public function getInfo()
    {
        return [
            $this->QtdWheels
            ,$this->Qtdpassengers
            ,$this->QtdCapacity
            ,$this->gearshift
            ,$this->maker
            ,$this->engine
        ];
    }

}