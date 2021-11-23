<?php


namespace Structures;

class House implements Building
{
    public int $houseNumber;
    public int $floors;
    public int $appartments;


    public function setNumber($number)
    {
        $this->houseNumber = $number;
    }
    public function setFloors($quantity)
    {
        $this->floors = $quantity;
    }
    public function setAppartments($appQuantity)
    {
        $this->appartments = $appQuantity;
    }


    private function getHouseNumber(): int
    {
        return $this->houseNumber;
    }

    private function getFloors(): int
    {
        return $this->floors;
    }

    private function getAppartments(): int
    {
        return $this->appartments;
    }

    public function getHouseInfo()
    {
        return 'House # '.$this->getHouseNumber().', '.$this->getFloors().' floors, '.$this->getAppartments().' appartments in total';
    }



}

