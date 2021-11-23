<?php

namespace Animals;

abstract class Animal
{
    protected string $name;
    protected $sound;

    public function __construct($name, $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }


    public abstract function getName();
    public abstract function say();
    public abstract function feed();

}