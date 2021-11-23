<?php

namespace Animals;

class Cat extends Animal
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

    public function getName():string
    {
        return $this->name;
    }
    private function getSound()
    {
        return $this->sound;
    }
    public function say()
    {
        echo('say '.$this->getSound());
    }
    public function feed()
    {
        echo('eating fish');
    }

    public function getCatFunc()
    {
        echo('Cat '.$this->getName().' '.$this->getColour().' colour.');
    }

}