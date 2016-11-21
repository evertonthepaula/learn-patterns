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
    private $QtdWheels;
    private $Qtdpassengers;
    private $QtdCapacity;
    private $gearshift;
    private $maker;

    private $engine;

    function __construct()
    {
        $this->QtdWheels = 2;
        $this->Qtdpassengers = 2;
        $this->QtdCapacity = 0;
        $this->gearshift = 4;
        $this->maker = 'Honda';

        $this->engine = ' OHC, Monocilíndrico 4 tempos, arrefecido a ar ';
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