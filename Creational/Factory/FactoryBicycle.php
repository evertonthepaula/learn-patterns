<?php

namespace Factory;


class FactoryBicycle extends Vehicle implements IAutomobileFactory
{

    function __construct()
    {
        $this->setQtdWheels(2);
        $this->setQtdpassengers(1);
        $this->setQtdCapacity(120);
        $this->setgearshift(16);
        $this->setmaker('Caloi');
    }


    public function getInfo()
    {
        return [
                $this->QtdWheels
                ,$this->Qtdpassengers
                ,$this->QtdCapacity
                ,$this->gearshift
                ,$this->maker
        ];
    }

}