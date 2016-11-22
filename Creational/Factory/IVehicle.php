<?php
/**
 * Created by PhpStorm.
 * User: epaula
 * Date: 22/11/16
 * Time: 13:43
 */

namespace Factory;


interface IVehicle
{
    public function setQtdWheels($n);
    public function getQtdWheels();

    public function setQtdpassengers($n);
    public function getQtdpassengers();

    public function setQtdCapacity($n);
    public function getQtdCapacity();

    public function setgearshift($n);
    public function getgearshift();

    public function setmaker($n);
    public function getmaker();
}