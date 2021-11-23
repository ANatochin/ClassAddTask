<?php

namespace Cars;

abstract class Vehicles

{
    protected $doors;
    protected $axes;
    protected $wheels;

    public function __construct($doors, $axes, $wheels)
    {
        $this->doors = $doors;
        $this->axes =$axes;
        $this->wheels = $wheels;
    }
    protected function getDoorsQty()
    {
        return $this->doors;
    }
    protected function getAxesQty()
    {
        return $this->axes;
    }
    protected function getWheelsQty()
    {
        return $this->wheels;
    }

    abstract public function aboutVehicle();


}