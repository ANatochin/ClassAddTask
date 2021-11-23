<?php

namespace Calculator;

class Calculator
{
    private $num1;
    private $num2;

    public function __construct($a, $b)
    {
        $this->num1 = $a;
        $this->num2 = $b;
    }

    private function getNum1()
    {
        return $this->num1;
    }
    private function getNum2()
    {
        return $this->num2;
    }

    public function sum()
    {
        return $this->getNum1() + $this->getNum2();
    }
    public function deduction()
    {
        return $this->getNum1() - $this->getNum2();
    }
    public function multiply()
    {
        return $this->getNum1() * $this->getNum2();
    }
    public function devide()
    {
        return $this->getNum1() / $this->getNum2();
    }
    public function exp()
    {
        return pow ($this->getNum1() , $this->getNum2());
    }
    public function root()
    {
        return sqrt($this->getNum1());
    }


}