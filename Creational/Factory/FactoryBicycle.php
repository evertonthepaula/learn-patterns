<?php

namespace Factory;


class FactoryBicycle implements IAutomobileFactory
{
    private $QtdWheels;
    private $Qtdpassengers;
    private $QtdCapacity;
    private $gearshift;
    private $maker;

    function __construct()
    {
        $this->QtdWheels = 2;
        $this->Qtdpassengers = 1;
        $this->QtdCapacity = 120;
        $this->gearshift = 16;
        $this->maker = "Caloi";
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