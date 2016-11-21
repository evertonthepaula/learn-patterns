<?php

namespace Factory;


class FactoryAutomobile implements IAutomobileFactory
{
    private $QtdWheels;
    private $Qtdpassengers;
    private $QtdCapacity;
    private $gearshift;
    private $maker;

    private $engine;

    function __construct()
    {
        $this->QtdWheels = 4;
        $this->Qtdpassengers = 5;
        $this->QtdCapacity = 500;
        $this->gearshift = 6;
        $this->maker = 'Wankel';

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