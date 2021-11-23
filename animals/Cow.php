<?php

namespace Animals;

class Cow extends Animal
{

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
        echo($this->getName().' cow said '.$this->getSound());
    }
    public function feed()
    {
        echo(' eating grass');
    }

}