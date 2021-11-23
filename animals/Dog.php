<?php

namespace Animals;

class Dog extends Animal
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
        echo($this->getSound());
    }
    public function feed()
    {
        echo('eating meat');
    }

}