<?php
require_once realpath("vendor/autoload.php");

use Structures\House;
use Animals\Dog;
use Animals\Cat;
use Animals\Cow;
use Cars\Van;
use Cars\Truck;
use Calculator\Calculator;



$house1 = new House();
$house1->setNumber(1);
$house1->setFloors(5);
$house1->setAppartments(20);

var_dump($house1->getHouseInfo());
echo('<br>');

$dog = new Dog('Sharik', 'gav');
$dog->say();
$dog->feed();
echo('<br>');

$cat = new Cat('Matroskin', 'myau');
$cat->setColour('grey');
$cat->getCatFunc();
$cat->say();
$cat->feed();
echo('<br>');

$cow = new Cow('Noname', 'mu');
$cow ->say();
$cow ->feed();
echo('<br>');

$van = new Van(7,2,4);
$van->setColour('green');
$van->aboutVehicle();

$truck = new Truck(2,3,10, 15);
$truck->aboutVehicle();

$calculator = new Calculator(2,3);
echo($calculator->exp());
