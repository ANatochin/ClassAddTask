<?php

namespace Cars;

class Truck extends Vehicles
{
    private $capacity;

    public function __construct($doors, $axes, $wheels,$capacity)
    {
        parent::__construct($doors, $axes, $wheels);
        $this->capacity = $capacity;
    }
    private function getCapacity()
    {
        return $this->capacity;
    }

    public function aboutVehicle()
    {
        echo('Truck with '.Vehicles::getDoorsQty().' doors, has '.Vehicles::getAxesQty().' axes and '.Vehicles::getWheelsQty().' wheels. ');
        echo('It\'s cargo capacity is '.$this->getCapacity().' mt.' );
        echo('<br>');
    }
}