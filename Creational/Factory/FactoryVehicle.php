<?php

namespace Factory;

class FactoryVehicle implements IVehicleFactory
{

    public function createAuto()
    {
        return new FactoryAutomobile();
    }

    public function createBicycle()
    {
        echo '';
    }

    public function createMotorcycle()
    {
       echo '';
    }


}