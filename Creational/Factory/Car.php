<?php
/**
 * Created by PhpStorm.
 * User: epaula
 * Date: 18/11/16
 * Time: 17:49
 */

namespace Factory;

use Factory\AutomobileFactory;


class Car implements IVehicleFActory
{
    protected $car;

    function __construct($car)
    {
        $this->car = $car;
    }

    public function create()
    {
        return new AutomobileFactory($car);
    }
}