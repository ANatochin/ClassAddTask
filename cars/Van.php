<?php

namespace Cars;

class Van extends Vehicles
{
    private $colour;

    public function setColour($colour)
    {
        $this->colour = $colour;
    }
    private function getColour()
    {
        return $this->colour;
    }
    public function move()
    {
        echo ('moving');
    }
    public function aboutVehicle()
    {
        echo('Van with '.Vehicles::getDoorsQty().' doors, '.$this->getColour().' coloured, has '.Vehicles::getAxesQty().' axes and '.Vehicles::getWheelsQty().' wheels.');
        echo('<br>');
    }
}