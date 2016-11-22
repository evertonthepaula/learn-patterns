<?php
/**
 * Created by PhpStorm.
 * User: epaula
 * Date: 22/11/16
 * Time: 13:41
 */

namespace Factory;


abstract class Vehicle implements IVehicle
{
    protected $QtdWheels;
    protected $Qtdpassengers;
    protected $QtdCapacity;
    protected $gearshift;
    protected $maker;

    public function setQtdWheels($n)
    {
        $this->QtdWheels = $n;
    }

    public function getQtdWheels()
    {
        return $this->QtdWheels;
    }

    public function setQtdpassengers($n)
    {
        $this->Qtdpassengers = $n;
    }

    public function getQtdpassengers()
    {
        return $this->Qtdpassengers;
    }

    public function setQtdCapacity($n)
    {
        $this->QtdCapacity = $n;
    }

    public function getQtdCapacity()
    {
        return $this->QtdCapacity;
    }

    public function setgearshift($n)
    {
        $this->gearshift = $n;
    }

    public function getgearshift()
    {
        return $this->gearshift;
    }

    public function setmaker($n)
    {
        $this->maker = $n;
    }

    public function getmaker()
    {
        return $this->maker;
    }

    abstract function getInfo();
}