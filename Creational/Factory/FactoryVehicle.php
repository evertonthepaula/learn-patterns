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
        return new FactoryBicycle();
    }

    public function createMotorcycle()
    {
        return new FactoryMotorcycle();
    }


}