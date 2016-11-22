<?php

namespace Factory;


class FactoryAutomobile extends Vehicle implements IAutomobileFactory
{
    private $engine;

    function __construct()
    {
        $this->setQtdWheels(4);
        $this->setQtdpassengers(5);
        $this->setQtdCapacity(500);
        $this->setgearshift(6);
        $this->setmaker('Wankel');

        $this->engine = 'Rotative Wankel 1.3 Liters';
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