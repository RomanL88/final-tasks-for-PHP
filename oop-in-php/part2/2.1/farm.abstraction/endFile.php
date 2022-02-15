<?php

require('animal.php');
require('birdFarm.php');
require('farmer.php');

$farm = new Farm;

$birdFarm = new BirdFarm;

$farmer = new Farmer;




/**
 * Наследники классов Animal и Bird
 */

// наследник животного 1 
class Dog extends Animal
{
    public $name = 'собака ';
    public function getName()
    {
        return $this->name;
    }
    public function isBird()
    {
        return false;
    }
}

// наследник животного 2
class Fox extends Animal
{
    public $name = 'лис ';
    public function getName()
    {
        return $this->name;
    }
    public function isBird()
    {
        return false;
    }
}

// наследник птицы 1
class sparrow extends Bird
{
    public $name = 'воробей ';
    public function getName()
    {
        return $this->name;
    }
    public function isBird()
    {
        return true;
    }
}

// наследник птицы 2
class swallow extends Bird
{
    public $name = 'ласточка ';
    public function getName()
    {
        return $this->name;
    }
    public function isBird()
    {
        return true;
    }
}

$swallow = new swallow;
$dog = new Dog;
$sparrow = new sparrow;
$fox = new Fox;

$birdFarm = new BirdFarm;
$farm1 = new Farm;

//СОЗДАЮ МАССИВ С ЖИВОТНЫМИ И ПТИЦАМИ
$lotsOfAnimals = [$swallow, $dog, $sparrow, $fox];

foreach ($lotsOfAnimals as $animal) {
    if ($animal->isBird()) {
        $farmer->addAnimal($birdFarm, $animal);
    } else {
        $farmer->addAnimal($farm1, $animal);
    }
}

$farmer->rollCall($farm1);
echo '<br>';
$farmer->rollCall($birdFarm);
