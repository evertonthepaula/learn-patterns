<?php

namespace Factory;

interface IVehicleFactory {

    public function createAuto();

    public function createBicycle();

    public function createMotorcycle();

}